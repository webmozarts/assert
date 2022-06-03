<?php

declare(strict_types=1);

namespace Webmozart\Assert\Bin;

use ArrayAccess;
use Closure;
use Countable;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;
use RuntimeException;
use Throwable;
use Webmozart\Assert\Assert;

final class MixinGenerator
{
    /**
     * @psalm-var list<string>
     *
     * @var string[]
     */
    private $unsupportedMethods = [
        'nullOrNotInstanceOf',  // not supported by psalm (https://github.com/vimeo/psalm/issues/3443)
        'allNotInstanceOf',     // not supported by psalm (https://github.com/vimeo/psalm/issues/3443)
        'nullOrNotEmpty',       // not supported by psalm (https://github.com/vimeo/psalm/issues/3443)
        'allNotEmpty',          // not supported by psalm (https://github.com/vimeo/psalm/issues/3443)
        'allNotNull',           // not supported by psalm (https://github.com/vimeo/psalm/issues/3443)
        'nullOrIsNotA',         // not supported by psalm (https://github.com/vimeo/psalm/issues/3444)
        'allIsNotA',            // not supported by psalm (https://github.com/vimeo/psalm/issues/3444)
        'nullOrNotFalse',       // not supported by psalm (https://github.com/vimeo/psalm/issues/3443)
        'allNotFalse',          // not supported by psalm (https://github.com/vimeo/psalm/issues/3443)
        'nullOrUpper',          // not supported by psalm (https://github.com/vimeo/psalm/issues/3443)
        'allUpper',             // not supported by psalm (https://github.com/vimeo/psalm/issues/3443)
        'nullOrIsNonEmptyMap',  // not supported by psalm (https://github.com/vimeo/psalm/issues/3444)
        'allIsNonEmptyMap',     // not supported by psalm (https://github.com/vimeo/psalm/issues/3444)
    ];

    /**
     * @psalm-var list<string>
     *
     * @var string[]
     */
    private $skipMethods = [
        'nullOrNull',           // meaningless
        'nullOrNotNull',        // meaningless
        'allNullOrNull',        // meaningless
        'allNullOrNotNull',     // meaningless
    ];

    public function generate(): string
    {
        return \sprintf(
            <<<'PHP'
<?php

%s
PHP
            ,
            $this->namespace()
        );
    }

    private function namespace(): string
    {
        $assert = new ReflectionClass(Assert::class);

        $namespace = sprintf("namespace %s;\n\n", $assert->getNamespaceName());
        $namespace .= sprintf("use %s;\n", ArrayAccess::class);
        $namespace .= sprintf("use %s;\n", Closure::class);
        $namespace .= sprintf("use %s;\n", Countable::class);
        $namespace .= sprintf("use %s;\n", Throwable::class);
        $namespace .= "\n";

        $namespace .= $this->trait($assert);

        return $namespace;
    }

    private function trait(ReflectionClass $assert): string
    {
        $staticMethods = $this->getMethods($assert);

        $declaredMethods = [];

        foreach ($staticMethods as $method) {
            $nullOr = $this->nullOr($method, 4);
            if (null !== $nullOr) {
                $declaredMethods[] = $nullOr;
            }

            $all = $this->all($method, 4);
            if (null !== $all) {
                $declaredMethods[] = $all;
            }

            $allNullOr = $this->allNullOr($method, 4);
            if (null !== $allNullOr) {
                $declaredMethods[] = $allNullOr;
            }
        }

        return \sprintf(
            <<<'PHP'
/**
 * This trait provides nurllOr*, all* and allNullOr* variants of assertion base methods.
 * Do not use this trait directly: it will change, and is not designed for reuse.
 */
trait Mixin
{
%s
}

PHP
            ,
            implode("\n\n", $declaredMethods)
        );
    }

    /**
     * @param ReflectionMethod $method
     * @param int              $indent
     *
     * @return string|null
     *
     * @throws ReflectionException
     */
    private function nullOr(ReflectionMethod $method, int $indent): ?string
    {
        return $this->assertion($method, 'nullOr%s', '%s|null', $indent, function (string $firstParameter, string $parameters) use ($method) {
            return "null === {$firstParameter} || static::{$method->name}({$firstParameter}, {$parameters});";
        });
    }

    /**
     * @param ReflectionMethod $method
     * @param int              $indent
     *
     * @return string|null
     *
     * @throws ReflectionException
     */
    private function all(ReflectionMethod $method, int $indent): ?string
    {
        return $this->assertion($method, 'all%s', 'iterable<%s>', $indent, function (string $firstParameter, string $parameters) use ($method) {
            return <<<BODY
static::isIterable({$firstParameter});

foreach ({$firstParameter} as \$entry) {
    static::{$method->name}(\$entry, {$parameters});
}
BODY;
        });
    }

    /**
     * @param ReflectionMethod $method
     * @param int              $indent
     *
     * @return string|null
     *
     * @throws ReflectionException
     */
    private function allNullOr(ReflectionMethod $method, int $indent): ?string
    {
        return $this->assertion($method, 'allNullOr%s', 'iterable<%s|null>', $indent, function (string $firstParameter, string $parameters) use ($method) {
            return <<<BODY
static::isIterable({$firstParameter});

foreach ({$firstParameter} as \$entry) {
    null === \$entry || static::{$method->name}(\$entry, {$parameters});
}
BODY;
        });
    }

    /**
     * @psalm-param callable(string,string):string $body
     *
     * @param ReflectionMethod $method
     * @param string           $methodNameTemplate
     * @param string           $typeTemplate
     * @param int              $indent
     * @param callable         $body
     *
     * @return string|null
     *
     * @throws ReflectionException
     */
    private function assertion(ReflectionMethod $method, string $methodNameTemplate, string $typeTemplate, int $indent, callable $body): ?string
    {
        $newMethodName = sprintf($methodNameTemplate, ucfirst($method->name));

        $comment = $method->getDocComment();

        $parsedComment = $this->parseDocComment($comment);

        $parameters = [];
        /** @psalm-var array<string, scalar|null> $parametersDefaults */
        $parametersDefaults = [];
        $parametersReflection = $method->getParameters();

        foreach ($parametersReflection as $parameterReflection) {
            $parameters[] = $parameterReflection->name;

            if ($parameterReflection->isDefaultValueAvailable()) {
                /** @var mixed $defaultValue */
                $defaultValue = $parameterReflection->getDefaultValue();
                Assert::nullOrScalar($defaultValue);

                $parametersDefaults[$parameterReflection->name] = $defaultValue;
            }
        }

        if (in_array($newMethodName, $this->skipMethods, true)) {
            return null;
        }

        $paramsAdded = false;

        $phpdocLines = [];
        foreach ($parsedComment as $key => $values) {
            if ($this->shouldSkipAnnotation($newMethodName, $key)) {
                continue;
            }

            if ($paramsAdded || 'param' === $key) {
                $paramsAdded = true;
                if (count($phpdocLines) > 0) {
                    $phpdocLines[] = '';
                }
            }

            if ('deprecated' === $key) {
                $phpdocLines[] = '';
            }

            $longestType = 0;
            $longestName = 0;

            foreach ($values as $i => $value) {
                $parts = $this->splitDocLine($value);
                if (('param' === $key || 'psalm-param' === $key) && isset($parts[1]) && $parts[1] === '$'.$parameters[0] && 'mixed' !== $parts[0]) {
                    $parts[0] = $this->applyTypeTemplate($parts[0], $typeTemplate);

                    $values[$i] = implode(' ', $parts);
                }
            }

            if ('param' === $key) {
                [$longestType, $longestName] = $this->findLongestTypeAndName($values);
            }

            foreach ($values as $value) {
                $parts = $this->splitDocLine($value);
                $type = $parts[0];

                if ('psalm-assert' === $key) {
                    $type = $this->applyTypeTemplate($type, $typeTemplate);
                }

                if ('param' === $key) {
                    if (!array_key_exists(1, $parts)) {
                        throw new RuntimeException(sprintf('param key must come with type and variable name in method: %s', $method->name));
                    }

                    $type = str_pad($type, $longestType, ' ');
                    $parts[1] = str_pad($parts[1], $longestName, ' ');
                }

                $comment = sprintf('@%s %s', $key, $type);
                if (count($parts) >= 2) {
                    $comment .= sprintf(' %s', implode(' ', array_slice($parts, 1)));
                }

                $phpdocLines[] = trim($comment);
            }

            if ('deprecated' === $key) {
                $phpdocLines[] = '';
            }
        }

        $phpdocLinesDeduplicatedEmptyLines = [];
        foreach ($phpdocLines as $line) {
            $currentLine = trim($line);
            if ('' === $currentLine && count($phpdocLinesDeduplicatedEmptyLines) > 0) {
                $previousLine = trim($phpdocLinesDeduplicatedEmptyLines[count($phpdocLinesDeduplicatedEmptyLines) - 1]);
                if ('' === $previousLine) {
                    continue;
                }
            }

            $phpdocLinesDeduplicatedEmptyLines[] = $line;
        }

        return $this->staticMethod($newMethodName, $parameters, $parametersDefaults, $phpdocLinesDeduplicatedEmptyLines, $indent, $body);
    }

    private function applyTypeTemplate(string $type, string $typeTemplate): string
    {
        $combinedType = sprintf($typeTemplate, $type);

        if ('empty|null' === $combinedType) {
            $combinedType = 'empty'; // @see https://github.com/vimeo/psalm/issues/3492
        }

        return $combinedType;
    }

    private function shouldSkipAnnotation(string $newMethodName, string $key): bool
    {
        if (!in_array($newMethodName, $this->unsupportedMethods, true)) {
            return false;
        }

        return 'psalm-assert' === $key;
    }

    /**
     * @psalm-param array<int, string> $values
     * @psalm-return array{int, int}
     *
     * @param string[] $values
     *
     * @return int[]
     */
    private function findLongestTypeAndName(array $values): array
    {
        $longestType = 0;
        $longestName = 0;

        foreach ($values as $value) {
            $parts = $this->splitDocLine($value);
            $type = $parts[0];
            if (strlen($type) > $longestType) {
                $longestType = strlen($type);
            }

            if (!array_key_exists(1, $parts)) {
                continue;
            }

            $name = $parts[1];
            if (strlen($name) > $longestName) {
                $longestName = strlen($name);
            }
        }

        return [$longestType, $longestName];
    }

    /**
     * @psalm-param list<string> $parameters
     * @psalm-param array<string, scalar|null> $defaultValues
     * @psalm-param list<string> $phpdocLines
     * @psalm-param callable(string,string):string $body
     *
     * @param string   $name
     * @param string[] $parameters
     * @param string[] $defaultValues
     * @param array    $phpdocLines
     * @param int      $indent
     * @param callable $body
     *
     * @return string
     */
    private function staticMethod(string $name, array $parameters, array $defaultValues, array $phpdocLines, int $indent, callable $body): string
    {
        $indentation = str_repeat(' ', $indent);

        $staticFunction = $this->phpdoc($phpdocLines, $indent)."\n";
        $staticFunction .= $indentation.'public static function '.$name.$this->functionParameters($parameters, $defaultValues)."\n"
            .$indentation."{\n";

        $firstParameter = '$'.array_shift($parameters);
        $parameters = implode(', ', \array_map(static function (string $parameter): string {
            return '$'.$parameter;
        }, $parameters));

        $staticFunction .= preg_replace('/(?<=^|\n)(?!\n)/', $indentation.$indentation, $body($firstParameter, $parameters))."\n";
        $staticFunction .= $indentation.'}';

        return $staticFunction;
    }

    /**
     * @psalm-param list<string> $parameters
     * @psalm-param array<string, scalar|null> $defaultValues
     *
     * @param string[] $parameters
     * @param string[] $defaultValues
     *
     * @return string
     */
    private function functionParameters(array $parameters, array $defaultValues): string
    {
        $result = '';

        foreach ($parameters as $i => $parameter) {
            if ($i > 0) {
                $result .= ', ';
            }

            $result .= '$'.$parameter;

            if (array_key_exists($parameter, $defaultValues)) {
                $defaultValue = null === $defaultValues[$parameter] ? 'null' : var_export($defaultValues[$parameter], true);

                $result .= ' = '.$defaultValue;
            }
        }

        return '('.$result.')';
    }

    /**
     * @psalm-param list<string> $lines
     *
     * @param string[] $lines
     * @param int      $indent
     *
     * @return string
     */
    private function phpdoc(array $lines, int $indent): string
    {
        $indentation = str_repeat(' ', $indent);

        $phpdoc = $indentation.'/**';

        foreach ($lines as $line) {
            $phpdoc .= "\n".$indentation.rtrim(' * '.$line);
        }

        $phpdoc .= "\n".$indentation.' *'
            . "\n".$indentation.' * @return void'
            . "\n".$indentation.' */';

        return $phpdoc;
    }

    /**
     * @psalm-return array<string, list<string>>
     *
     * @param string $comment
     *
     * @return string[][]
     */
    private function parseDocComment(string $comment): array
    {
        $lines = explode("\n", $comment);

        $result = [];

        foreach ($lines as $line) {
            if (preg_match('~^\*\s+@(\S+)(\s+.*)?$~', trim($line), $matches)) {
                if (2 === count($matches)) {
                    $matches[2] = '';
                }
                $result[$matches[1]][] = trim($matches[2]);
            }
        }

        return $result;
    }

    /**
     * @psalm-return array{0: string, 1?: string, 2?: string}
     *
     * @param string $line
     *
     * @return string[]
     */
    private function splitDocLine(string $line): array
    {
        if (!preg_match('~^(.*)\s+(\$\S+)(?:\s+(.*))?$~', $line, $matches)) {
            return [$line];
        }

        $parts = [trim($matches[1]), $matches[2]];
        if (count($matches) > 3) {
            $parts[2] = $matches[3];
        }

        return $parts;
    }

    /**
     * @psalm-return list<ReflectionMethod>
     *
     * @param ReflectionClass $assert
     *
     * @return ReflectionMethod[]
     */
    private function getMethods(ReflectionClass $assert): array
    {
        $methods = [];

        $staticMethods = $assert->getMethods(ReflectionMethod::IS_STATIC);

        foreach ($staticMethods as $staticMethod) {
            $modifiers = $staticMethod->getModifiers();
            if (0 === ($modifiers & ReflectionMethod::IS_PUBLIC)) {
                continue;
            }

            if ($staticMethod->getFileName() !== $assert->getFileName()) {
                // Skip this method - was imported by generated mixin
                continue;
            }

            if ('__callStatic' === $staticMethod->name) {
                continue;
            }

            $methods[] = $staticMethod;
        }

        return $methods;
    }
}
