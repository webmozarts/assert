<?php

namespace Webmozart\Assert\Tests;

use PHPUnit\Framework\Attributes\BeforeClass;
use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionMethod;
use Webmozart\Assert\Bin\MixinGenerator;

#[CoversNothing]
class ProjectCodeTest extends TestCase
{
    private static string $readmeContent;
    private static string $assertDocComment;
    private static array $mixinMethodNames;

    #[BeforeClass]
    public static function scanStaticContent()
    {
        self::$readmeContent = file_get_contents(__DIR__.'/../README.md');

        $rc = new ReflectionClass('\Webmozart\Assert\Mixin');
        self::$assertDocComment = $rc->getDocComment();

        self::$mixinMethodNames = array();
        foreach ($rc->getMethods() as $method) {
            self::$mixinMethodNames[] = $method->name;
        }
    }

    /**
     * @param string $method
     */
    #[DataProvider('providesMethodNames')]
    public function testHasNullOr($method)
    {
        $fullMethodName = 'nullOr'.ucfirst($method);

        if ($method === 'notNull' || $method === 'null') {
            $this->addToAssertionCount(1);

            return;
        }
        $correct = strpos((string) self::$assertDocComment, '@method static void '.$fullMethodName);
        if (!$correct) {
            $correct = in_array($fullMethodName, self::$mixinMethodNames, true);
        }

        if ($correct === false) {
            $this->fail(sprintf(
                'All methods have a corresponding "nullOr" method, please add the "%s" method to the class level doc comment.',
                $fullMethodName
            ));
        }

        $this->addToAssertionCount(1);
    }

    /**
     * @param string $method
     */
    #[DataProvider('providesMethodNames')]
    public function testHasAll($method)
    {
        $fullMethodName = 'all'.ucfirst($method);

        $correct = strpos((string) self::$assertDocComment, '@method static void '.$fullMethodName);
        if (!$correct) {
            $correct = in_array($fullMethodName, self::$mixinMethodNames, true);
        }

        if ($correct === false) {
            $this->fail(sprintf(
                'All methods have a corresponding "all" method, please add the "%s" method to the class level doc comment.',
                $fullMethodName
            ));
        }

        $this->addToAssertionCount(1);
    }

    /**
     * @param string $method
     */
    #[DataProvider('providesMethodNames')]
    public function testIsInReadme($method)
    {
        $correct = strpos((string) self::$readmeContent, $method);

        if ($correct === false) {
            $this->fail(sprintf(
                'All methods must be documented in the README.md, please add the "%s" method.',
                $method
            ));
        }
        $this->addToAssertionCount(1);
    }

    /**
     * @param ReflectionMethod $method
     */
    #[DataProvider('provideMethods')]
    public function testHasThrowsAnnotation($method)
    {
        $doc = $method->getDocComment();

        $this->assertNotFalse(
            $doc,
            sprintf(
                'Expected a doc comment on the "%s" method, but none found',
                $method->getName()
            )
        );

        $this->assertStringContainsString(
            '@throws InvalidArgumentException',
            $doc,
            sprintf(
                'Expected method "%s" to have an @throws InvalidArgumentException annotation, but none found',
                $method->getName()
            )
        );
    }

    /**
     * @param ReflectionMethod $method
     */
    #[DataProvider('provideMethods')]
    public function testHasCorrespondingStaticAnalysisFile($method)
    {
        $doc = $method->getDocComment();

        if ($doc === false || strpos($doc, '@psalm-assert') === false) {
            $this->addToAssertionCount(1);

            return;
        }

        $this->assertFileExists(
            __DIR__.'/static-analysis/assert-'.$method->getName().'.php'
        );
    }

    public function testMixinIsUpToDateVersion()
    {
        if (PHP_OS_FAMILY === 'Windows') {
            $this->markTestSkipped('mixin generator is not expected to run on Windows');

            return;
        }

        require_once __DIR__.'/../bin/src/MixinGenerator.php';

        $generator = new MixinGenerator();

        $actual = file_get_contents(__DIR__.'/../src/Mixin.php');

        $this->assertEquals($generator->generate(), $actual, 'please regenerate Mixin with `php bin/generate.php` command in the project root');
    }

    /**
     * @return array
     */
    public static function providesMethodNames()
    {
        return array_map(function ($value) {
            return array($value->getName());
        }, self::getMethods());
    }

    /**
     * @return array
     */
    public static function provideMethods()
    {
        return array_map(function ($value) {
            return array($value);
        }, self::getMethods());
    }

    /**
     * @return array
     */
    private static function getMethods()
    {
        static $methods;

        if ($methods !== null) {
            return $methods;
        }

        $rc = new ReflectionClass('\Webmozart\Assert\Assert');
        $methods = array();

        $rcMethods = $rc->getMethods(ReflectionMethod::IS_PUBLIC);

        foreach ($rcMethods as $rcMethod) {
            if ($rcMethod->getFileName() !== $rc->getFileName()) {
                continue;
            }

            $methodName = $rcMethod->getName();
            if (strpos($methodName, '__') === 0) {
                continue;
            }
            $methods[] = $rcMethod;
        }

        return $methods;
    }
}
