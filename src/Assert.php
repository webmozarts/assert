<?php

/*
 * This file is part of the webmozart/assert package.
 *
 * (c) Bernhard Schussek <bschussek@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Webmozart\Assert;

use ArrayAccess;
use BadMethodCallException;
use Closure;
use Countable;
use Exception;
use InvalidArgumentException;
use Throwable;
use Traversable;

/**
 * Efficient assertions to validate the input/output of your methods.
 *
 * @method static void nullOrString($value, $message = '', $exception = null)
 * @method static void nullOrStringNotEmpty($value, $message = '', $exception = null)
 * @method static void nullOrInteger($value, $message = '', $exception = null)
 * @method static void nullOrIntegerish($value, $message = '', $exception = null)
 * @method static void nullOrFloat($value, $message = '', $exception = null)
 * @method static void nullOrNumeric($value, $message = '', $exception = null)
 * @method static void nullOrNatural($value, $message = '', $exception = null)
 * @method static void nullOrBoolean($value, $message = '', $exception = null)
 * @method static void nullOrScalar($value, $message = '', $exception = null)
 * @method static void nullOrObject($value, $message = '', $exception = null)
 * @method static void nullOrResource($value, $type = null, $message = '', $exception = null)
 * @method static void nullOrIsCallable($value, $message = '', $exception = null)
 * @method static void nullOrIsArray($value, $message = '', $exception = null)
 * @method static void nullOrIsTraversable($value, $message = '', $exception = null)
 * @method static void nullOrIsArrayAccessible($value, $message = '', $exception = null)
 * @method static void nullOrIsCountable($value, $message = '', $exception = null)
 * @method static void nullOrIsIterable($value, $message = '', $exception = null)
 * @method static void nullOrIsInstanceOf($value, $class, $message = '', $exception = null)
 * @method static void nullOrNotInstanceOf($value, $class, $message = '', $exception = null)
 * @method static void nullOrIsInstanceOfAny($value, $classes, $message = '', $exception = null)
 * @method static void nullOrIsEmpty($value, $message = '', $exception = null)
 * @method static void nullOrNotEmpty($value, $message = '', $exception = null)
 * @method static void nullOrTrue($value, $message = '', $exception = null)
 * @method static void nullOrFalse($value, $message = '', $exception = null)
 * @method static void nullOrIp($value, $message = '', $exception = null)
 * @method static void nullOrIpv4($value, $message = '', $exception = null)
 * @method static void nullOrIpv6($value, $message = '', $exception = null)
 * @method static void nullOrEmail($value, $message = '', $exception = null)
 * @method static void nullOrUniqueValues($values, $message = '', $exception = null)
 * @method static void nullOrEq($value, $expect, $message = '', $exception = null)
 * @method static void nullOrNotEq($value, $expect, $message = '', $exception = null)
 * @method static void nullOrSame($value, $expect, $message = '', $exception = null)
 * @method static void nullOrNotSame($value, $expect, $message = '', $exception = null)
 * @method static void nullOrGreaterThan($value, $limit, $message = '', $exception = null)
 * @method static void nullOrGreaterThanEq($value, $limit, $message = '', $exception = null)
 * @method static void nullOrLessThan($value, $limit, $message = '', $exception = null)
 * @method static void nullOrLessThanEq($value, $limit, $message = '', $exception = null)
 * @method static void nullOrRange($value, $min, $max, $message = '', $exception = null)
 * @method static void nullOrOneOf($value, $values, $message = '', $exception = null)
 * @method static void nullOrContains($value, $subString, $message = '', $exception = null)
 * @method static void nullOrNotContains($value, $subString, $message = '', $exception = null)
 * @method static void nullOrNotWhitespaceOnly($value, $message = '', $exception = null)
 * @method static void nullOrStartsWith($value, $prefix, $message = '', $exception = null)
 * @method static void nullOrStartsWithLetter($value, $message = '', $exception = null)
 * @method static void nullOrEndsWith($value, $suffix, $message = '', $exception = null)
 * @method static void nullOrRegex($value, $pattern, $message = '', $exception = null)
 * @method static void nullOrNotRegex($value, $pattern, $message = '', $exception = null)
 * @method static void nullOrUnicodeLetters($value, $message = '', $exception = null)
 * @method static void nullOrAlpha($value, $message = '', $exception = null)
 * @method static void nullOrDigits($value, $message = '', $exception = null)
 * @method static void nullOrAlnum($value, $message = '', $exception = null)
 * @method static void nullOrLower($value, $message = '', $exception = null)
 * @method static void nullOrUpper($value, $message = '', $exception = null)
 * @method static void nullOrLength($value, $length, $message = '', $exception = null)
 * @method static void nullOrMinLength($value, $min, $message = '', $exception = null)
 * @method static void nullOrMaxLength($value, $max, $message = '', $exception = null)
 * @method static void nullOrLengthBetween($value, $min, $max, $message = '', $exception = null)
 * @method static void nullOrFileExists($value, $message = '', $exception = null)
 * @method static void nullOrFile($value, $message = '', $exception = null)
 * @method static void nullOrDirectory($value, $message = '', $exception = null)
 * @method static void nullOrReadable($value, $message = '', $exception = null)
 * @method static void nullOrWritable($value, $message = '', $exception = null)
 * @method static void nullOrClassExists($value, $message = '', $exception = null)
 * @method static void nullOrSubclassOf($value, $class, $message = '', $exception = null)
 * @method static void nullOrInterfaceExists($value, $message = '', $exception = null)
 * @method static void nullOrImplementsInterface($value, $interface, $message = '', $exception = null)
 * @method static void nullOrPropertyExists($value, $property, $message = '', $exception = null)
 * @method static void nullOrPropertyNotExists($value, $property, $message = '', $exception = null)
 * @method static void nullOrMethodExists($value, $method, $message = '', $exception = null)
 * @method static void nullOrMethodNotExists($value, $method, $message = '', $exception = null)
 * @method static void nullOrKeyExists($value, $key, $message = '', $exception = null)
 * @method static void nullOrKeyNotExists($value, $key, $message = '', $exception = null)
 * @method static void nullOrCount($value, $key, $message = '', $exception = null)
 * @method static void nullOrMinCount($value, $min, $message = '', $exception = null)
 * @method static void nullOrMaxCount($value, $max, $message = '', $exception = null)
 * @method static void nullOrIsList($value, $message = '', $exception = null)
 * @method static void nullOrIsMap($value, $message = '', $exception = null)
 * @method static void nullOrCountBetween($value, $min, $max, $message = '', $exception = null)
 * @method static void nullOrUuid($values, $message = '', $exception = null)
 * @method static void nullOrThrows($expression, $class = 'Exception', $message = '', $exception = null)
 * @method static void allString($values, $message = '', $exception = null)
 * @method static void allStringNotEmpty($values, $message = '', $exception = null)
 * @method static void allInteger($values, $message = '', $exception = null)
 * @method static void allIntegerish($values, $message = '', $exception = null)
 * @method static void allFloat($values, $message = '', $exception = null)
 * @method static void allNumeric($values, $message = '', $exception = null)
 * @method static void allNatural($values, $message = '', $exception = null)
 * @method static void allBoolean($values, $message = '', $exception = null)
 * @method static void allScalar($values, $message = '', $exception = null)
 * @method static void allObject($values, $message = '', $exception = null)
 * @method static void allResource($values, $type = null, $message = '', $exception = null)
 * @method static void allIsCallable($values, $message = '', $exception = null)
 * @method static void allIsArray($values, $message = '', $exception = null)
 * @method static void allIsTraversable($values, $message = '', $exception = null)
 * @method static void allIsArrayAccessible($values, $message = '', $exception = null)
 * @method static void allIsCountable($values, $message = '', $exception = null)
 * @method static void allIsIterable($values, $message = '', $exception = null)
 * @method static void allIsInstanceOf($values, $class, $message = '', $exception = null)
 * @method static void allNotInstanceOf($values, $class, $message = '', $exception = null)
 * @method static void allIsInstanceOfAny($values, $classes, $message = '', $exception = null)
 * @method static void allNull($values, $message = '', $exception = null)
 * @method static void allNotNull($values, $message = '', $exception = null)
 * @method static void allIsEmpty($values, $message = '', $exception = null)
 * @method static void allNotEmpty($values, $message = '', $exception = null)
 * @method static void allTrue($values, $message = '', $exception = null)
 * @method static void allFalse($values, $message = '', $exception = null)
 * @method static void allIp($values, $message = '', $exception = null)
 * @method static void allIpv4($values, $message = '', $exception = null)
 * @method static void allIpv6($values, $message = '', $exception = null)
 * @method static void allEmail($values, $message = '', $exception = null)
 * @method static void allUniqueValues($values, $message = '', $exception = null)
 * @method static void allEq($values, $expect, $message = '', $exception = null)
 * @method static void allNotEq($values, $expect, $message = '', $exception = null)
 * @method static void allSame($values, $expect, $message = '', $exception = null)
 * @method static void allNotSame($values, $expect, $message = '', $exception = null)
 * @method static void allGreaterThan($values, $limit, $message = '', $exception = null)
 * @method static void allGreaterThanEq($values, $limit, $message = '', $exception = null)
 * @method static void allLessThan($values, $limit, $message = '', $exception = null)
 * @method static void allLessThanEq($values, $limit, $message = '', $exception = null)
 * @method static void allRange($values, $min, $max, $message = '', $exception = null)
 * @method static void allOneOf($values, $values, $message = '', $exception = null)
 * @method static void allContains($values, $subString, $message = '', $exception = null)
 * @method static void allNotContains($values, $subString, $message = '', $exception = null)
 * @method static void allNotWhitespaceOnly($values, $message = '', $exception = null)
 * @method static void allStartsWith($values, $prefix, $message = '', $exception = null)
 * @method static void allStartsWithLetter($values, $message = '', $exception = null)
 * @method static void allEndsWith($values, $suffix, $message = '', $exception = null)
 * @method static void allRegex($values, $pattern, $message = '', $exception = null)
 * @method static void allNotRegex($values, $pattern, $message = '', $exception = null)
 * @method static void allUnicodeLetters($values, $message = '', $exception = null)
 * @method static void allAlpha($values, $message = '', $exception = null)
 * @method static void allDigits($values, $message = '', $exception = null)
 * @method static void allAlnum($values, $message = '', $exception = null)
 * @method static void allLower($values, $message = '', $exception = null)
 * @method static void allUpper($values, $message = '', $exception = null)
 * @method static void allLength($values, $length, $message = '', $exception = null)
 * @method static void allMinLength($values, $min, $message = '', $exception = null)
 * @method static void allMaxLength($values, $max, $message = '', $exception = null)
 * @method static void allLengthBetween($values, $min, $max, $message = '', $exception = null)
 * @method static void allFileExists($values, $message = '', $exception = null)
 * @method static void allFile($values, $message = '', $exception = null)
 * @method static void allDirectory($values, $message = '', $exception = null)
 * @method static void allReadable($values, $message = '', $exception = null)
 * @method static void allWritable($values, $message = '', $exception = null)
 * @method static void allClassExists($values, $message = '', $exception = null)
 * @method static void allSubclassOf($values, $class, $message = '', $exception = null)
 * @method static void allInterfaceExists($values, $message = '', $exception = null)
 * @method static void allImplementsInterface($values, $interface, $message = '', $exception = null)
 * @method static void allPropertyExists($values, $property, $message = '', $exception = null)
 * @method static void allPropertyNotExists($values, $property, $message = '', $exception = null)
 * @method static void allMethodExists($values, $method, $message = '', $exception = null)
 * @method static void allMethodNotExists($values, $method, $message = '', $exception = null)
 * @method static void allKeyExists($values, $key, $message = '', $exception = null)
 * @method static void allKeyNotExists($values, $key, $message = '', $exception = null)
 * @method static void allCount($values, $key, $message = '', $exception = null)
 * @method static void allMinCount($values, $min, $message = '', $exception = null)
 * @method static void allMaxCount($values, $max, $message = '', $exception = null)
 * @method static void allCountBetween($values, $min, $max, $message = '', $exception = null)
 * @method static void allIsList($values, $message = '', $exception = null)
 * @method static void allIsMap($values, $message = '', $exception = null)
 * @method static void allUuid($values, $message = '', $exception = null)
 * @method static void allThrows($expressions, $class = 'Exception', $message = '', $exception = null)
 *
 * @since  1.0
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Assert
{

    /**
     * @psalm-assert string $value
     *
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function string($value, $message = '', $exception = null)
    {
        if (!\is_string($value)) {
            static::throwException(\sprintf(
                $message ?: 'Expected a string. Got: %s',
                static::typeToString($value)
            ), $exception);
        }
    }

    /**
     * @psalm-assert string $value
     *
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function stringNotEmpty($value, $message = '', $exception = null)
    {
        static::string($value, $message, $exception);
        static::notEq($value, '', $message, $exception);
    }

    /**
     * @psalm-assert int $value
     *
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function integer($value, $message = '', $exception = null)
    {
        if (!\is_int($value)) {
            static::throwException(\sprintf(
                $message ?: 'Expected an integer. Got: %s',
                static::typeToString($value)
            ), $exception);
        }
    }

    /**
     * @psalm-assert numeric $value
     *
     * @param mixed  $value
     * @param string $message
     */
    public static function integerish($value, $message = '', $exception = null)
    {
        if (!\is_numeric($value) || $value != (int) $value) {
            static::throwException(\sprintf(
                $message ?: 'Expected an integerish value. Got: %s',
                static::typeToString($value)
            ), $exception);
        }
    }

    /**
     * @psalm-assert float $value
     *
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function float($value, $message = '', $exception = null)
    {
        if (!\is_float($value)) {
            static::throwException(\sprintf(
                $message ?: 'Expected a float. Got: %s',
                static::typeToString($value)
            ), $exception);
        }
    }

    /**
     * @psalm-assert numeric $value
     *
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function numeric($value, $message = '', $exception = null)
    {
        if (!\is_numeric($value)) {
            static::throwException(\sprintf(
                $message ?: 'Expected a numeric. Got: %s',
                static::typeToString($value)
            ), $exception);
        }
    }

    /**
     * @psalm-assert int $value
     *
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function natural($value, $message = '', $exception = null)
    {
        if (!\is_int($value) || $value < 0) {
            static::throwException(\sprintf(
                $message ?: 'Expected a non-negative integer. Got %s',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @psalm-assert bool $value
     *
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function boolean($value, $message = '', $exception = null)
    {
        if (!\is_bool($value)) {
            static::throwException(\sprintf(
                $message ?: 'Expected a boolean. Got: %s',
                static::typeToString($value)
            ), $exception);
        }
    }

    /**
     * @psalm-assert scalar $value
     *
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function scalar($value, $message = '', $exception = null)
    {
        if (!\is_scalar($value)) {
            static::throwException(\sprintf(
                $message ?: 'Expected a scalar. Got: %s',
                static::typeToString($value)
            ), $exception);
        }
    }

    /**
     * @psalm-assert object $value
     *
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function object($value, $message = '', $exception = null)
    {
        if (!\is_object($value)) {
            static::throwException(\sprintf(
                $message ?: 'Expected an object. Got: %s',
                static::typeToString($value)
            ), $exception);
        }
    }

    /**
     * @psalm-assert resource $value
     *
     * @param mixed $value
     * @param string|null $type type of resource this should be. @see https://www.php.net/manual/en/function.get-resource-type.php
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function resource($value, $type = null, $message = '', $exception = null)
    {
        if (!\is_resource($value)) {
            static::throwException(\sprintf(
                $message ?: 'Expected a resource. Got: %s',
                static::typeToString($value)
            ), $exception);
        }

        if ($type && $type !== \get_resource_type($value)) {
            static::throwException(\sprintf(
                $message ?: 'Expected a resource of type %2$s. Got: %s',
                static::typeToString($value),
                $type
            ), $exception);
        }
    }

    /**
     * @psalm-assert callable $value
     *
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function isCallable($value, $message = '', $exception = null)
    {
        if (!\is_callable($value)) {
            static::throwException(\sprintf(
                $message ?: 'Expected a callable. Got: %s',
                static::typeToString($value)
            ), $exception);
        }
    }

    /**
     * @psalm-assert array $value
     *
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function isArray($value, $message = '', $exception = null)
    {
        if (!\is_array($value)) {
            static::throwException(\sprintf(
                $message ?: 'Expected an array. Got: %s',
                static::typeToString($value)
            ), $exception);
        }
    }

    /**
     * @psalm-assert iterable $value
     *
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     * @deprecated use "isIterable" or "isInstanceOf" instead
     *
     */
    public static function isTraversable($value, $message = '', $exception = null)
    {
        @\trigger_error(
            \sprintf(
                'The "%s" assertion is deprecated. You should stop using it, as it will soon be removed in 2.0 version. Use "isIterable" or "isInstanceOf" instead.',
                __METHOD__
            ),
            \E_USER_DEPRECATED
        );

        if (!\is_array($value) && !($value instanceof Traversable)) {
            static::throwException(\sprintf(
                $message ?: 'Expected a traversable. Got: %s',
                static::typeToString($value)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function isArrayAccessible($value, $message = '', $exception = null)
    {
        if (!\is_array($value) && !($value instanceof ArrayAccess)) {
            static::throwException(\sprintf(
                $message ?: 'Expected an array accessible. Got: %s',
                static::typeToString($value)
            ), $exception);
        }
    }

    /**
     * @psalm-assert countable $value
     *
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function isCountable($value, $message = '', $exception = null)
    {
        if (!\is_array($value) && !($value instanceof Countable)) {
            static::throwException(\sprintf(
                $message ?: 'Expected a countable. Got: %s',
                static::typeToString($value)
            ), $exception);
        }
    }

    /**
     * @psalm-assert iterable $value
     *
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function isIterable($value, $message = '', $exception = null)
    {
        if (!\is_array($value) && !($value instanceof Traversable)) {
            static::throwException(\sprintf(
                $message ?: 'Expected an iterable. Got: %s',
                static::typeToString($value)
            ), $exception);
        }
    }

    /**
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert ExpectedType $value
     *
     * @param mixed $value
     * @param string|object $class
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function isInstanceOf($value, $class, $message = '', $exception = null)
    {
        if (!($value instanceof $class)) {
            static::throwException(\sprintf(
                $message ?: 'Expected an instance of %2$s. Got: %s',
                static::typeToString($value),
                $class
            ), $exception);
        }
    }

    /**
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert !ExpectedType $value
     *
     * @param mixed $value
     * @param string|object $class
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function notInstanceOf($value, $class, $message = '', $exception = null)
    {
        if ($value instanceof $class) {
            static::throwException(\sprintf(
                $message ?: 'Expected an instance other than %2$s. Got: %s',
                static::typeToString($value),
                $class
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param array<object|string> $classes
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function isInstanceOfAny($value, array $classes, $message = '', $exception = null)
    {
        foreach ($classes as $class) {
            if ($value instanceof $class) {
                return;
            }
        }

        static::throwException(\sprintf(
            $message ?: 'Expected an instance of any of %2$s. Got: %s',
            static::typeToString($value),
            \implode(', ', \array_map(array('static', 'valueToString'), $classes))
        ), $exception);
    }

    /**
     * @psalm-assert empty $value
     *
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function isEmpty($value, $message = '', $exception = null)
    {
        if (!empty($value)) {
            static::throwException(\sprintf(
                $message ?: 'Expected an empty value. Got: %s',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @psalm-assert !empty $value
     *
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function notEmpty($value, $message = '', $exception = null)
    {
        if (empty($value)) {
            static::throwException(\sprintf(
                $message ?: 'Expected a non-empty value. Got: %s',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @psalm-assert null $value
     *
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function null($value, $message = '', $exception = null)
    {
        if (null !== $value) {
            static::throwException(\sprintf(
                $message ?: 'Expected null. Got: %s',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @psalm-assert !null $value
     *
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function notNull($value, $message = '', $exception = null)
    {
        if (null === $value) {
            static::throwException(
                $message ?: 'Expected a value other than null.',
                $exception
            );
        }
    }

    /**
     * @psalm-assert true $value
     *
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function true($value, $message = '', $exception = null)
    {
        if (true !== $value) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value to be true. Got: %s',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @psalm-assert false $value
     *
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function false($value, $message = '', $exception = null)
    {
        if (false !== $value) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value to be false. Got: %s',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function ip($value, $message = '', $exception = null)
    {
        if (false === \filter_var($value, \FILTER_VALIDATE_IP)) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value to be an IP. Got: %s',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function ipv4($value, $message = '', $exception = null)
    {
        if (false === \filter_var($value, \FILTER_VALIDATE_IP, \FILTER_FLAG_IPV4)) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value to be an IPv4. Got: %s',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function ipv6($value, $message = '', $exception = null)
    {
        if (false === \filter_var($value, \FILTER_VALIDATE_IP, \FILTER_FLAG_IPV6)) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value to be an IPv6. Got %s',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function email($value, $message = '', $exception = null)
    {
        if (false === \filter_var($value, FILTER_VALIDATE_EMAIL)) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value to be a valid e-mail address. Got %s',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * Does non strict comparisons on the items, so ['3', 3] will not pass the assertion.
     *
     * @param array $values
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function uniqueValues(array $values, $message = '', $exception = null)
    {
        $allValues = \count($values);
        $uniqueValues = \count(\array_unique($values));

        if ($allValues !== $uniqueValues) {
            $difference = $allValues - $uniqueValues;

            static::throwException(\sprintf(
                $message ?: 'Expected an array of unique values, but %s of them %s duplicated',
                $difference,
                (1 === $difference ? 'is' : 'are')
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param mixed $expect
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function eq($value, $expect, $message = '', $exception = null)
    {
        if ($expect != $value) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value equal to %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($expect)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param mixed $expect
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function notEq($value, $expect, $message = '', $exception = null)
    {
        if ($expect == $value) {
            static::throwException(\sprintf(
                $message ?: 'Expected a different value than %s.',
                static::valueToString($expect)
            ), $exception);
        }
    }

    /**
     * @psalm-template ExpectedType
     * @psalm-param ExpectedType $expect
     * @psalm-assert =ExpectedType $value
     *
     * @param mixed $value
     * @param mixed $expect
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function same($value, $expect, $message = '', $exception = null)
    {
        if ($expect !== $value) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value identical to %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($expect)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param mixed $expect
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function notSame($value, $expect, $message = '', $exception = null)
    {
        if ($expect === $value) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value not identical to %s.',
                static::valueToString($expect)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param mixed $limit
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function greaterThan($value, $limit, $message = '', $exception = null)
    {
        if ($value <= $limit) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value greater than %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($limit)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param mixed $limit
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function greaterThanEq($value, $limit, $message = '', $exception = null)
    {
        if ($value < $limit) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value greater than or equal to %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($limit)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param mixed $limit
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function lessThan($value, $limit, $message = '', $exception = null)
    {
        if ($value >= $limit) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value less than %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($limit)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param mixed $limit
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function lessThanEq($value, $limit, $message = '', $exception = null)
    {
        if ($value > $limit) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value less than or equal to %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($limit)
            ), $exception);
        }
    }

    /**
     * Inclusive range, so Assert::(3, 3, 5) passes.
     *
     * @param mixed $value
     * @param $min
     * @param $max
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function range($value, $min, $max, $message = '', $exception = null)
    {
        if ($value < $min || $value > $max) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value between %2$s and %3$s. Got: %s',
                static::valueToString($value),
                static::valueToString($min),
                static::valueToString($max)
            ), $exception);
        }
    }

    /**
     * Does strict comparison, so Assert::oneOf(3, ['3']) does not pass the assertion.
     *
     * @psalm-template ExpectedType
     * @psalm-param array<ExpectedType> $values
     * @psalm-assert ExpectedType $value
     *
     * @param mixed $value
     * @param array $values
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function oneOf($value, array $values, $message = '', $exception = null)
    {
        if (!\in_array($value, $values, true)) {
            static::throwException(\sprintf(
                $message ?: 'Expected one of: %2$s. Got: %s',
                static::valueToString($value),
                \implode(', ', \array_map(array('static', 'valueToString'), $values))
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param string $subString
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function contains($value, $subString, $message = '', $exception = null)
    {
        if (false === \strpos($value, $subString)) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value to contain %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($subString)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param string $subString
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function notContains($value, $subString, $message = '', $exception = null)
    {
        if (false !== \strpos($value, $subString)) {
            static::throwException(\sprintf(
                $message ?: '%2$s was not expected to be contained in a value. Got: %s',
                static::valueToString($value),
                static::valueToString($subString)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function notWhitespaceOnly($value, $message = '', $exception = null)
    {
        if (\preg_match('/^\s*$/', $value)) {
            static::throwException(\sprintf(
                $message ?: 'Expected a non-whitespace string. Got: %s',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param string $prefix
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function startsWith($value, $prefix, $message = '', $exception = null)
    {
        if (0 !== \strpos($value, $prefix)) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value to start with %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($prefix)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function startsWithLetter($value, $message = '', $exception = null)
    {
        $valid = isset($value[0]);

        if ($valid) {
            $locale = \setlocale(LC_CTYPE, 0);
            \setlocale(LC_CTYPE, 'C');
            $valid = \ctype_alpha($value[0]);
            \setlocale(LC_CTYPE, $locale);
        }

        if (!$valid) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value to start with a letter. Got: %s',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param string $suffix
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function endsWith($value, $suffix, $message = '', $exception = null)
    {
        if ($suffix !== \substr($value, -\strlen($suffix))) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value to end with %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($suffix)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param mixed $pattern
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function regex($value, $pattern, $message = '', $exception = null)
    {
        if (!\preg_match($pattern, $value)) {
            static::throwException(\sprintf(
                $message ?: 'The value %s does not match the expected pattern.',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param mixed $pattern
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function notRegex($value, $pattern, $message = '', $exception = null)
    {
        if (\preg_match($pattern, $value, $matches, PREG_OFFSET_CAPTURE)) {
            static::throwException(\sprintf(
                $message ?: 'The value %s matches the pattern %s (at offset %d).',
                static::valueToString($value),
                static::valueToString($pattern),
                $matches[0][1]
            ), $exception);
        }
    }

    /**
     * @psalm-assert !numeric $value
     *
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function unicodeLetters($value, $message = '', $exception = null)
    {
        static::string($value);

        if (!\preg_match('/^\p{L}+$/u', $value)) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value to contain only Unicode letters. Got: %s',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function alpha($value, $message = '', $exception = null)
    {
        $locale = \setlocale(LC_CTYPE, 0);
        \setlocale(LC_CTYPE, 'C');
        $valid = !\ctype_alpha($value);
        \setlocale(LC_CTYPE, $locale);

        if ($valid) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value to contain only letters. Got: %s',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function digits($value, $message = '', $exception = null)
    {
        $locale = \setlocale(LC_CTYPE, 0);
        \setlocale(LC_CTYPE, 'C');
        $valid = !\ctype_digit($value);
        \setlocale(LC_CTYPE, $locale);

        if ($valid) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value to contain digits only. Got: %s',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function alnum($value, $message = '', $exception = null)
    {
        $locale = \setlocale(LC_CTYPE, 0);
        \setlocale(LC_CTYPE, 'C');
        $valid = !\ctype_alnum($value);
        \setlocale(LC_CTYPE, $locale);

        if ($valid) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value to contain letters and digits only. Got: %s',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function lower($value, $message = '', $exception = null)
    {
        $locale = \setlocale(LC_CTYPE, 0);
        \setlocale(LC_CTYPE, 'C');
        $valid = !\ctype_lower($value);
        \setlocale(LC_CTYPE, $locale);

        if ($valid) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value to contain lowercase characters only. Got: %s',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function upper($value, $message = '', $exception = null)
    {
        $locale = \setlocale(LC_CTYPE, 0);
        \setlocale(LC_CTYPE, 'C');
        $valid = !\ctype_upper($value);
        \setlocale(LC_CTYPE, $locale);

        if ($valid) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value to contain uppercase characters only. Got: %s',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param mixed $length
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function length($value, $length, $message = '', $exception = null)
    {
        if ($length !== static::strlen($value)) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value to contain %2$s characters. Got: %s',
                static::valueToString($value),
                $length
            ), $exception);
        }
    }

    /**
     * Inclusive min.
     *
     * @param mixed $value
     * @param mixed $min
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function minLength($value, $min, $message = '', $exception = null)
    {
        if (static::strlen($value) < $min) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value to contain at least %2$s characters. Got: %s',
                static::valueToString($value),
                $min
            ), $exception);
        }
    }

    /**
     * Inclusive max.
     *
     * @param mixed $value
     * @param mixed $max
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function maxLength($value, $max, $message = '', $exception = null)
    {
        if (static::strlen($value) > $max) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value to contain at most %2$s characters. Got: %s',
                static::valueToString($value),
                $max
            ), $exception);
        }
    }

    /**
     * Inclusive , so Assert::lengthBetween('asd', 3, 5); passes the assertion.
     *
     * @param mixed $value
     * @param mixed $min
     * @param mixed $max
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function lengthBetween($value, $min, $max, $message = '', $exception = null)
    {
        $length = static::strlen($value);

        if ($length < $min || $length > $max) {
            static::throwException(\sprintf(
                $message ?: 'Expected a value to contain between %2$s and %3$s characters. Got: %s',
                static::valueToString($value),
                $min,
                $max
            ), $exception);
        }
    }

    /**
     * Will also pass if $value is a directory, use Assert::file() instead if you need to be sure it is a file.
     *
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function fileExists($value, $message = '', $exception = null)
    {
        static::string($value);

        if (!\file_exists($value)) {
            static::throwException(\sprintf(
                $message ?: 'The file %s does not exist.',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function file($value, $message = '', $exception = null)
    {
        static::fileExists($value, $message, $exception);

        if (!\is_file($value)) {
            static::throwException(\sprintf(
                $message ?: 'The path %s is not a file.',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function directory($value, $message = '', $exception = null)
    {
        static::fileExists($value, $message, $exception);

        if (!\is_dir($value)) {
            static::throwException(\sprintf(
                $message ?: 'The path %s is no directory.',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function readable($value, $message = '', $exception = null)
    {
        if (!\is_readable($value)) {
            static::throwException(\sprintf(
                $message ?: 'The path %s is not readable.',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function writable($value, $message = '', $exception = null)
    {
        if (!\is_writable($value)) {
            static::throwException(\sprintf(
                $message ?: 'The path %s is not writable.',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @psalm-assert class-string $value
     *
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function classExists($value, $message = '', $exception = null)
    {
        if (!\class_exists($value)) {
            static::throwException(\sprintf(
                $message ?: 'Expected an existing class name. Got: %s',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param string|object $class
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function subclassOf($value, $class, $message = '', $exception = null)
    {
        if (!\is_subclass_of($value, $class)) {
            static::throwException(\sprintf(
                $message ?: 'Expected a sub-class of %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($class)
            ), $exception);
        }
    }

    /**
     * @psalm-assert class-string $value
     *
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function interfaceExists($value, $message = '', $exception = null)
    {
        if (!\interface_exists($value)) {
            static::throwException(\sprintf(
                $message ?: 'Expected an existing interface name. got %s',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @param mixed $value
     * @param mixed $interface
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function implementsInterface($value, $interface, $message = '', $exception = null)
    {
        if (!\in_array($interface, \class_implements($value))) {
            static::throwException(\sprintf(
                $message ?: 'Expected an implementation of %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($interface)
            ), $exception);
        }
    }

    /**
     * @param string|object $classOrObject
     * @param mixed $property
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function propertyExists($classOrObject, $property, $message = '', $exception = null)
    {
        if (!\property_exists($classOrObject, $property)) {
            static::throwException(\sprintf(
                $message ?: 'Expected the property %s to exist.',
                static::valueToString($property)
            ), $exception);
        }
    }

    /**
     * @param string|object $classOrObject
     * @param mixed $property
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function propertyNotExists($classOrObject, $property, $message = '', $exception = null)
    {
        if (\property_exists($classOrObject, $property)) {
            static::throwException(\sprintf(
                $message ?: 'Expected the property %s to not exist.',
                static::valueToString($property)
            ), $exception);
        }
    }

    /**
     * @param string|object $classOrObject
     * @param mixed $method
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function methodExists($classOrObject, $method, $message = '', $exception = null)
    {
        if (!\method_exists($classOrObject, $method)) {
            static::throwException(\sprintf(
                $message ?: 'Expected the method %s to exist.',
                static::valueToString($method)
            ), $exception);
        }
    }

    /**
     * @param string|object $classOrObject
     * @param mixed $method
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function methodNotExists($classOrObject, $method, $message = '', $exception = null)
    {
        if (\method_exists($classOrObject, $method)) {
            static::throwException(\sprintf(
                $message ?: 'Expected the method %s to not exist.',
                static::valueToString($method)
            ), $exception);
        }
    }

    /**
     * @param array $array
     * @param string|int $key
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function keyExists($array, $key, $message = '', $exception = null)
    {
        if (!(isset($array[$key]) || \array_key_exists($key, $array))) {
            static::throwException(\sprintf(
                $message ?: 'Expected the key %s to exist.',
                static::valueToString($key)
            ), $exception);
        }
    }

    /**
     * @param array $array
     * @param string|int $key
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function keyNotExists($array, $key, $message = '', $exception = null)
    {
        if (isset($array[$key]) || \array_key_exists($key, $array)) {
            static::throwException(\sprintf(
                $message ?: 'Expected the key %s to not exist.',
                static::valueToString($key)
            ), $exception);
        }
    }

    /**
     * Does not check if $array is countable, this can generate a warning on php versions after 7.2.
     *
     * @param mixed $array
     * @param mixed $number
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function count($array, $number, $message = '', $exception = null)
    {
        static::eq(
            \count($array),
            $number,
            $message ?: \sprintf('Expected an array to contain %d elements. Got: %d.', $number, \count($array)),
            $exception
        );
    }

    /**
     * Does not check if $array is countable, this can generate a warning on php versions after 7.2.
     *
     * @param mixed $array
     * @param mixed $min
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function minCount($array, $min, $message = '', $exception = null)
    {
        if (\count($array) < $min) {
            static::throwException(\sprintf(
                $message ?: 'Expected an array to contain at least %2$d elements. Got: %d',
                \count($array),
                $min
            ), $exception);
        }
    }

    /**
     * Does not check if $array is countable, this can generate a warning on php versions after 7.2.
     *
     * @param mixed $array
     * @param mixed $max
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function maxCount($array, $max, $message = '', $exception = null)
    {
        if (\count($array) > $max) {
            static::throwException(\sprintf(
                $message ?: 'Expected an array to contain at most %2$d elements. Got: %d',
                \count($array),
                $max
            ), $exception);
        }
    }

    /**
     * Does not check if $array is countable, this can generate a warning on php versions after 7.2.
     *
     * @param mixed $array
     * @param mixed $min
     * @param mixed $max
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function countBetween($array, $min, $max, $message = '', $exception = null)
    {
        $count = \count($array);

        if ($count < $min || $count > $max) {
            static::throwException(\sprintf(
                $message ?: 'Expected an array to contain between %2$d and %3$d elements. Got: %d',
                $count,
                $min,
                $max
            ), $exception);
        }
    }

    /**
     * @param mixed $array
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function isList($array, $message = '', $exception = null)
    {
        if (!\is_array($array) || !$array || \array_keys($array) !== \range(0, \count($array) - 1)) {
            static::throwException(
                $message ?: 'Expected list - non-associative array.',
                $exception
            );
        }
    }

    /**
     * @param mixed $array
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function isMap($array, $message = '', $exception = null)
    {
        if (
            !\is_array($array) ||
            !$array ||
            \array_keys($array) !== \array_filter(\array_keys($array), function ($key) {
                return \is_string($key);
            })
        ) {
            static::throwException(
                $message ?: 'Expected map - associative array with string keys.',
                $exception
            );
        }
    }

    /**
     * @param mixed $value
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function uuid($value, $message = '', $exception = null)
    {
        $value = \str_replace(array('urn:', 'uuid:', '{', '}'), '', $value);

        // The nil UUID is special form of UUID that is specified to have all
        // 128 bits set to zero.
        if ('00000000-0000-0000-0000-000000000000' === $value) {
            return;
        }

        if (!\preg_match('/^[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}$/', $value)) {
            static::throwException(\sprintf(
                $message ?: 'Value %s is not a valid UUID.',
                static::valueToString($value)
            ), $exception);
        }
    }

    /**
     * @param Closure $expression
     * @param string|object $class
     * @param string $message
     * @param null $exception
     * @throws Exception
     */
    public static function throws(Closure $expression, $class = 'Exception', $message = '', $exception = null)
    {
        static::string($class, '', $exception);

        $actual = 'none';

        try {
            $expression();
        } catch (Exception $e) {
            $actual = \get_class($e);
            if ($e instanceof $class) {
                return;
            }
        } catch (Throwable $e) {
            $actual = \get_class($e);
            if ($e instanceof $class) {
                return;
            }
        }

        static::throwException($message ?: \sprintf(
            'Expected to throw "%s", got "%s"',
            $class,
            $actual
        ), $exception);
    }

    public static function __callStatic($name, $arguments)
    {
        if ('nullOr' === \substr($name, 0, 6)) {
            if (null !== $arguments[0]) {
                $method = \lcfirst(\substr($name, 6));
                \call_user_func_array(array('static', $method), $arguments);
            }

            return;
        }

        if ('all' === \substr($name, 0, 3)) {
            static::isIterable($arguments[0]);

            $method = \lcfirst(\substr($name, 3));
            $args = $arguments;

            foreach ($arguments[0] as $entry) {
                $args[0] = $entry;

                \call_user_func_array(array('static', $method), $args);
            }

            return;
        }

        throw new BadMethodCallException('No such method: '.$name);
    }

    /**
     * @param mixed $value
     *
     * @return string
     */
    protected static function valueToString($value)
    {
        if (null === $value) {
            return 'null';
        }

        if (true === $value) {
            return 'true';
        }

        if (false === $value) {
            return 'false';
        }

        if (\is_array($value)) {
            return 'array';
        }

        if (\is_object($value)) {
            if (\method_exists($value, '__toString')) {
                return \get_class($value).': '.self::valueToString($value->__toString());
            }

            return \get_class($value);
        }

        if (\is_resource($value)) {
            return 'resource';
        }

        if (\is_string($value)) {
            return '"'.$value.'"';
        }

        return (string) $value;
    }

    /**
     * @param mixed $value
     *
     * @return string
     */
    protected static function typeToString($value)
    {
        return \is_object($value) ? \get_class($value) : \gettype($value);
    }

    protected static function strlen($value)
    {
        if (!\function_exists('mb_detect_encoding')) {
            return \strlen($value);
        }

        if (false === $encoding = \mb_detect_encoding($value)) {
            return \strlen($value);
        }

        return \mb_strlen($value, $encoding);
    }

    private static function throwException($message, $exception = null)
    {
        if (!is_null($exception)) {
            if ($exception instanceof Exception) {
                throw $exception;
            }
        }

        static::reportInvalidArgument($message);
    }

    /**
     * @param string $message
     */
    protected static function reportInvalidArgument($message)
    {
        throw new InvalidArgumentException($message);
    }

    private function __construct()
    {
    }
}
