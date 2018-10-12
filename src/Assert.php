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
 * @method static void nullOrString($value, $message = '')
 * @method static void nullOrStringNotEmpty($value, $message = '')
 * @method static void nullOrInteger($value, $message = '')
 * @method static void nullOrIntegerish($value, $message = '')
 * @method static void nullOrFloat($value, $message = '')
 * @method static void nullOrNumeric($value, $message = '')
 * @method static void nullOrBoolean($value, $message = '')
 * @method static void nullOrScalar($value, $message = '')
 * @method static void nullOrObject($value, $message = '')
 * @method static void nullOrResource($value, $type = null, $message = '')
 * @method static void nullOrIsCallable($value, $message = '')
 * @method static void nullOrIsArray($value, $message = '')
 * @method static void nullOrIsTraversable($value, $message = '')
 * @method static void nullOrIsArrayAccessible($value, $message = '')
 * @method static void nullOrIsCountable($value, $message = '')
 * @method static void nullOrIsInstanceOf($value, $class, $message = '')
 * @method static void nullOrNotInstanceOf($value, $class, $message = '')
 * @method static void nullOrIsInstanceOfAny($value, $classes, $message = '')
 * @method static void nullOrIsEmpty($value, $message = '')
 * @method static void nullOrNotEmpty($value, $message = '')
 * @method static void nullOrTrue($value, $message = '')
 * @method static void nullOrFalse($value, $message = '')
 * @method static void nullOrEq($value, $value2, $message = '')
 * @method static void nullOrNotEq($value,$value2,  $message = '')
 * @method static void nullOrSame($value, $value2, $message = '')
 * @method static void nullOrNotSame($value, $value2, $message = '')
 * @method static void nullOrGreaterThan($value, $value2, $message = '')
 * @method static void nullOrGreaterThanEq($value, $value2, $message = '')
 * @method static void nullOrLessThan($value, $value2, $message = '')
 * @method static void nullOrLessThanEq($value, $value2, $message = '')
 * @method static void nullOrRange($value, $min, $max, $message = '')
 * @method static void nullOrOneOf($value, $values, $message = '')
 * @method static void nullOrContains($value, $subString, $message = '')
 * @method static void nullOrNotContains($value, $subString, $message = '')
 * @method static void nullOrNotWhitespaceOnly($value, $message = '')
 * @method static void nullOrStartsWith($value, $prefix, $message = '')
 * @method static void nullOrStartsWithLetter($value, $message = '')
 * @method static void nullOrEndsWith($value, $suffix, $message = '')
 * @method static void nullOrRegex($value, $pattern, $message = '')
 * @method static void nullOrNotRegex($value, $pattern, $message = '')
 * @method static void nullOrAlpha($value, $message = '')
 * @method static void nullOrDigits($value, $message = '')
 * @method static void nullOrAlnum($value, $message = '')
 * @method static void nullOrLower($value, $message = '')
 * @method static void nullOrUpper($value, $message = '')
 * @method static void nullOrLength($value, $length, $message = '')
 * @method static void nullOrMinLength($value, $min, $message = '')
 * @method static void nullOrMaxLength($value, $max, $message = '')
 * @method static void nullOrLengthBetween($value, $min, $max, $message = '')
 * @method static void nullOrFileExists($value, $message = '')
 * @method static void nullOrFile($value, $message = '')
 * @method static void nullOrDirectory($value, $message = '')
 * @method static void nullOrReadable($value, $message = '')
 * @method static void nullOrWritable($value, $message = '')
 * @method static void nullOrClassExists($value, $message = '')
 * @method static void nullOrSubclassOf($value, $class, $message = '')
 * @method static void nullOrImplementsInterface($value, $interface, $message = '')
 * @method static void nullOrPropertyExists($value, $property, $message = '')
 * @method static void nullOrPropertyNotExists($value, $property, $message = '')
 * @method static void nullOrMethodExists($value, $method, $message = '')
 * @method static void nullOrMethodNotExists($value, $method, $message = '')
 * @method static void nullOrKeyExists($value, $key, $message = '')
 * @method static void nullOrKeyNotExists($value, $key, $message = '')
 * @method static void nullOrCount($value, $key, $message = '')
 * @method static void nullOrMinCount($value, $min, $message = '')
 * @method static void nullOrMaxCount($value, $max, $message = '')
 * @method static void nullCountBetween($value, $min, $max, $message = '')
 * @method static void nullOrUuid($values, $message = '')
 * @method static void allString($values, $message = '')
 * @method static void allStringNotEmpty($values, $message = '')
 * @method static void allInteger($values, $message = '')
 * @method static void allIntegerish($values, $message = '')
 * @method static void allFloat($values, $message = '')
 * @method static void allNumeric($values, $message = '')
 * @method static void allBoolean($values, $message = '')
 * @method static void allScalar($values, $message = '')
 * @method static void allObject($values, $message = '')
 * @method static void allResource($values, $type = null, $message = '')
 * @method static void allIsCallable($values, $message = '')
 * @method static void allIsArray($values, $message = '')
 * @method static void allIsTraversable($values, $message = '')
 * @method static void allIsArrayAccessible($values, $message = '')
 * @method static void allIsCountable($values, $message = '')
 * @method static void allIsInstanceOf($values, $class, $message = '')
 * @method static void allNotInstanceOf($values, $class, $message = '')
 * @method static void allIsInstanceOfAny($values, $classes, $message = '')
 * @method static void allNull($values, $message = '')
 * @method static void allNotNull($values, $message = '')
 * @method static void allIsEmpty($values, $message = '')
 * @method static void allNotEmpty($values, $message = '')
 * @method static void allTrue($values, $message = '')
 * @method static void allFalse($values, $message = '')
 * @method static void allEq($values, $value2, $message = '')
 * @method static void allNotEq($values,$value2,  $message = '')
 * @method static void allSame($values, $value2, $message = '')
 * @method static void allNotSame($values, $value2, $message = '')
 * @method static void allGreaterThan($values, $value2, $message = '')
 * @method static void allGreaterThanEq($values, $value2, $message = '')
 * @method static void allLessThan($values, $value2, $message = '')
 * @method static void allLessThanEq($values, $value2, $message = '')
 * @method static void allRange($values, $min, $max, $message = '')
 * @method static void allOneOf($values, $values, $message = '')
 * @method static void allContains($values, $subString, $message = '')
 * @method static void allNotContains($values, $subString, $message = '')
 * @method static void allNotWhitespaceOnly($values, $message = '')
 * @method static void allStartsWith($values, $prefix, $message = '')
 * @method static void allStartsWithLetter($values, $message = '')
 * @method static void allEndsWith($values, $suffix, $message = '')
 * @method static void allRegex($values, $pattern, $message = '')
 * @method static void allNotRegex($values, $pattern, $message = '')
 * @method static void allAlpha($values, $message = '')
 * @method static void allDigits($values, $message = '')
 * @method static void allAlnum($values, $message = '')
 * @method static void allLower($values, $message = '')
 * @method static void allUpper($values, $message = '')
 * @method static void allLength($values, $length, $message = '')
 * @method static void allMinLength($values, $min, $message = '')
 * @method static void allMaxLength($values, $max, $message = '')
 * @method static void allLengthBetween($values, $min, $max, $message = '')
 * @method static void allFileExists($values, $message = '')
 * @method static void allFile($values, $message = '')
 * @method static void allDirectory($values, $message = '')
 * @method static void allReadable($values, $message = '')
 * @method static void allWritable($values, $message = '')
 * @method static void allClassExists($values, $message = '')
 * @method static void allSubclassOf($values, $class, $message = '')
 * @method static void allImplementsInterface($values, $interface, $message = '')
 * @method static void allPropertyExists($values, $property, $message = '')
 * @method static void allPropertyNotExists($values, $property, $message = '')
 * @method static void allMethodExists($values, $method, $message = '')
 * @method static void allMethodNotExists($values, $method, $message = '')
 * @method static void allKeyExists($values, $key, $message = '')
 * @method static void allKeyNotExists($values, $key, $message = '')
 * @method static void allCount($values, $key, $message = '')
 * @method static void allMinCount($values, $min, $message = '')
 * @method static void allMaxCount($values, $max, $message = '')
 * @method static void allCountBetween($values, $min, $max, $message = '')
 * @method static void allUuid($values, $message = '')
 *
 * @since  1.0
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Assert
{
    /**
     * String.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function string($value, $message = '')
    {
        if (!is_string($value)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a string. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * String not empty.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function stringNotEmpty($value, $message = '')
    {
        static::string($value, $message);
        static::notEq($value, '', $message);
    }

    /**
     * Integer.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function integer($value, $message = '')
    {
        if (!is_int($value)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected an integer. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * Integerish.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function integerish($value, $message = '')
    {
        if (!is_numeric($value) || $value != (int) $value) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected an integerish value. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * Float.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function float($value, $message = '')
    {
        if (!is_float($value)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a float. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * Numeric.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function numeric($value, $message = '')
    {
        if (!is_numeric($value)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a numeric. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * Natural.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function natural($value, $message = '')
    {
        if (!is_int($value) || $value < 0) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a non-negative integer. Got %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * Boolean.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function boolean($value, $message = '')
    {
        if (!is_bool($value)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a boolean. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * Scalar.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function scalar($value, $message = '')
    {
        if (!is_scalar($value)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a scalar. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * Object.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function object($value, $message = '')
    {
        if (!is_object($value)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected an object. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * Resource.
     *
     * @param        $value
     * @param null   $type
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function resource($value, $type = null, $message = '')
    {
        if (!is_resource($value)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a resource. Got: %s',
                static::typeToString($value)
            ));
        }

        if ($type && $type !== get_resource_type($value)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a resource of type %2$s. Got: %s',
                static::typeToString($value),
                $type
            ));
        }
    }

    /**
     * Is callable.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function isCallable($value, $message = '')
    {
        if (!is_callable($value)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a callable. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * Is array.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function isArray($value, $message = '')
    {
        if (!is_array($value)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected an array. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * Is traversable.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function isTraversable($value, $message = '')
    {
        @trigger_error(
            sprintf(
                'The "%s" assertion is deprecated. You should stop using it, as it will soon be removed in 2.0 version. Use "isIterable" or "isInstanceOf" instead.',
                __METHOD__
            ),
            E_USER_DEPRECATED
        );

        if (!is_array($value) && !($value instanceof Traversable)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a traversable. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * Is array accessible.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function isArrayAccessible($value, $message = '')
    {
        if (!is_array($value) && !($value instanceof ArrayAccess)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected an array accessible. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * Is countable.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function isCountable($value, $message = '')
    {
        if (!is_array($value) && !($value instanceof Countable)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a countable. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * Is iterable.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function isIterable($value, $message = '')
    {
        if (!is_array($value) && !($value instanceof Traversable)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected an iterable. Got: %s',
                static::typeToString($value)
            ));
        }
    }

    /**
     * Is instance of.
     *
     * @param        $value
     * @param        $class
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function isInstanceOf($value, $class, $message = '')
    {
        if (!($value instanceof $class)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected an instance of %2$s. Got: %s',
                static::typeToString($value),
                $class
            ));
        }
    }

    /**
     * Not instance of.
     *
     * @param        $value
     * @param        $class
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function notInstanceOf($value, $class, $message = '')
    {
        if ($value instanceof $class) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected an instance other than %2$s. Got: %s',
                static::typeToString($value),
                $class
            ));
        }
    }

    /**
     * Is instance of any.
     *
     * @param        $value
     * @param array  $classes
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function isInstanceOfAny($value, array $classes, $message = '')
    {
        foreach ($classes as $class) {
            if ($value instanceof $class) {
                return;
            }
        }

        static::reportInvalidArgument(sprintf(
            $message ?: 'Expected an instance of any of %2$s. Got: %s',
            static::typeToString($value),
            implode(', ', array_map(array('static', 'valueToString'), $classes))
        ));
    }

    /**
     * Is empty.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function isEmpty($value, $message = '')
    {
        if (!empty($value)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected an empty value. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * Not empty.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function notEmpty($value, $message = '')
    {
        if (empty($value)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a non-empty value. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * Null.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function null($value, $message = '')
    {
        if (null !== $value) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected null. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * Not null.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function notNull($value, $message = '')
    {
        if (null === $value) {
            static::reportInvalidArgument(
                $message ?: 'Expected a value other than null.'
            );
        }
    }

    /**
     * True.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function true($value, $message = '')
    {
        if (true !== $value) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a value to be true. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * False.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function false($value, $message = '')
    {
        if (false !== $value) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a value to be false. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * Eq.
     *
     * @param        $value
     * @param        $value2
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function eq($value, $value2, $message = '')
    {
        if ($value2 != $value) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a value equal to %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($value2)
            ));
        }
    }

    /**
     * Not eq.
     *
     * @param        $value
     * @param        $value2
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function notEq($value, $value2, $message = '')
    {
        if ($value2 == $value) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a different value than %s.',
                static::valueToString($value2)
            ));
        }
    }

    /**
     * Same.
     *
     * @param        $value
     * @param        $value2
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function same($value, $value2, $message = '')
    {
        if ($value2 !== $value) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a value identical to %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($value2)
            ));
        }
    }

    /**
     * Not same.
     *
     * @param        $value
     * @param        $value2
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function notSame($value, $value2, $message = '')
    {
        if ($value2 === $value) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a value not identical to %s.',
                static::valueToString($value2)
            ));
        }
    }

    /**
     * Greater than.
     *
     * @param        $value
     * @param        $limit
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function greaterThan($value, $limit, $message = '')
    {
        if ($value <= $limit) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a value greater than %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($limit)
            ));
        }
    }

    /**
     * Greater than eq.
     *
     * @param        $value
     * @param        $limit
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function greaterThanEq($value, $limit, $message = '')
    {
        if ($value < $limit) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a value greater than or equal to %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($limit)
            ));
        }
    }

    /**
     * Less than.
     *
     * @param        $value
     * @param        $limit
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function lessThan($value, $limit, $message = '')
    {
        if ($value >= $limit) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a value less than %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($limit)
            ));
        }
    }

    /**
     * Less than eq.
     *
     * @param        $value
     * @param        $limit
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function lessThanEq($value, $limit, $message = '')
    {
        if ($value > $limit) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a value less than or equal to %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($limit)
            ));
        }
    }

    /**
     * Range.
     *
     * @param        $value
     * @param        $min
     * @param        $max
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function range($value, $min, $max, $message = '')
    {
        if ($value < $min || $value > $max) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a value between %2$s and %3$s. Got: %s',
                static::valueToString($value),
                static::valueToString($min),
                static::valueToString($max)
            ));
        }
    }

    /**
     * One of.
     *
     * @param        $value
     * @param array  $values
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function oneOf($value, array $values, $message = '')
    {
        if (!in_array($value, $values, true)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected one of: %2$s. Got: %s',
                static::valueToString($value),
                implode(', ', array_map(array('static', 'valueToString'), $values))
            ));
        }
    }

    /**
     * Contains.
     *
     * @param        $value
     * @param        $subString
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function contains($value, $subString, $message = '')
    {
        if (false === strpos($value, $subString)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a value to contain %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($subString)
            ));
        }
    }

    /**
     * Not contains.
     *
     * @param        $value
     * @param        $subString
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function notContains($value, $subString, $message = '')
    {
        if (false !== strpos($value, $subString)) {
            static::reportInvalidArgument(sprintf(
                $message ?: '%2$s was not expected to be contained in a value. Got: %s',
                static::valueToString($value),
                static::valueToString($subString)
            ));
        }
    }

    /**
     * Not whitespace only.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function notWhitespaceOnly($value, $message = '')
    {
        if (preg_match('/^\s*$/', $value)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a non-whitespace string. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * Starts with.
     *
     * @param        $value
     * @param        $prefix
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function startsWith($value, $prefix, $message = '')
    {
        if (0 !== strpos($value, $prefix)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a value to start with %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($prefix)
            ));
        }
    }

    /**
     * Starts with letter.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function startsWithLetter($value, $message = '')
    {
        $valid = isset($value[0]);

        if ($valid) {
            $locale = setlocale(LC_CTYPE, 0);
            setlocale(LC_CTYPE, 'C');
            $valid = ctype_alpha($value[0]);
            setlocale(LC_CTYPE, $locale);
        }

        if (!$valid) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a value to start with a letter. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * Ends with.
     *
     * @param        $value
     * @param        $suffix
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function endsWith($value, $suffix, $message = '')
    {
        if ($suffix !== substr($value, -static::strlen($suffix))) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a value to end with %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($suffix)
            ));
        }
    }

    /**
     * Regex.
     *
     * @param        $value
     * @param        $pattern
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function regex($value, $pattern, $message = '')
    {
        if (!preg_match($pattern, $value)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'The value %s does not match the expected pattern.',
                static::valueToString($value)
            ));
        }
    }

    /**
     * Not regex.
     *
     * @param        $value
     * @param        $pattern
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function notRegex($value, $pattern, $message = '')
    {
        if (preg_match($pattern, $value, $matches, PREG_OFFSET_CAPTURE)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'The value %s matches the pattern %s (at offset %d).',
                static::valueToString($value),
                static::valueToString($pattern),
                $matches[0][1]
            ));
        }
    }

    /**
     * Alpha.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function alpha($value, $message = '')
    {
        $locale = setlocale(LC_CTYPE, 0);
        setlocale(LC_CTYPE, 'C');
        $valid = !ctype_alpha($value);
        setlocale(LC_CTYPE, $locale);

        if ($valid) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a value to contain only letters. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * Digits.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function digits($value, $message = '')
    {
        $locale = setlocale(LC_CTYPE, 0);
        setlocale(LC_CTYPE, 'C');
        $valid = !ctype_digit($value);
        setlocale(LC_CTYPE, $locale);

        if ($valid) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a value to contain digits only. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * Alnum.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function alnum($value, $message = '')
    {
        $locale = setlocale(LC_CTYPE, 0);
        setlocale(LC_CTYPE, 'C');
        $valid = !ctype_alnum($value);
        setlocale(LC_CTYPE, $locale);

        if ($valid) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a value to contain letters and digits only. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * Lower.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function lower($value, $message = '')
    {
        $locale = setlocale(LC_CTYPE, 0);
        setlocale(LC_CTYPE, 'C');
        $valid = !ctype_lower($value);
        setlocale(LC_CTYPE, $locale);

        if ($valid) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a value to contain lowercase characters only. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * Upper.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function upper($value, $message = '')
    {
        $locale = setlocale(LC_CTYPE, 0);
        setlocale(LC_CTYPE, 'C');
        $valid = !ctype_upper($value);
        setlocale(LC_CTYPE, $locale);

        if ($valid) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a value to contain uppercase characters only. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * Length.
     *
     * @param        $value
     * @param        $length
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function length($value, $length, $message = '')
    {
        if ($length !== static::strlen($value)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a value to contain %2$s characters. Got: %s',
                static::valueToString($value),
                $length
            ));
        }
    }

    /**
     * Min length.
     *
     * @param        $value
     * @param        $min
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function minLength($value, $min, $message = '')
    {
        if (static::strlen($value) < $min) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a value to contain at least %2$s characters. Got: %s',
                static::valueToString($value),
                $min
            ));
        }
    }

    /**
     * Max length.
     *
     * @param        $value
     * @param        $max
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function maxLength($value, $max, $message = '')
    {
        if (static::strlen($value) > $max) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a value to contain at most %2$s characters. Got: %s',
                static::valueToString($value),
                $max
            ));
        }
    }

    /**
     * Length between.
     *
     * @param        $value
     * @param        $min
     * @param        $max
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function lengthBetween($value, $min, $max, $message = '')
    {
        $length = static::strlen($value);

        if ($length < $min || $length > $max) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a value to contain between %2$s and %3$s characters. Got: %s',
                static::valueToString($value),
                $min,
                $max
            ));
        }
    }

    /**
     * File exists.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function fileExists($value, $message = '')
    {
        static::string($value);

        if (!file_exists($value)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'The file %s does not exist.',
                static::valueToString($value)
            ));
        }
    }

    /**
     * File.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function file($value, $message = '')
    {
        static::fileExists($value, $message);

        if (!is_file($value)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'The path %s is not a file.',
                static::valueToString($value)
            ));
        }
    }

    /**
     * Directory.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function directory($value, $message = '')
    {
        static::fileExists($value, $message);

        if (!is_dir($value)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'The path %s is no directory.',
                static::valueToString($value)
            ));
        }
    }

    /**
     * Readable.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function readable($value, $message = '')
    {
        if (!is_readable($value)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'The path %s is not readable.',
                static::valueToString($value)
            ));
        }
    }

    /**
     * Writable.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function writable($value, $message = '')
    {
        if (!is_writable($value)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'The path %s is not writable.',
                static::valueToString($value)
            ));
        }
    }

    /**
     * Class exists.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function classExists($value, $message = '')
    {
        if (!class_exists($value)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected an existing class name. Got: %s',
                static::valueToString($value)
            ));
        }
    }

    /**
     * Subclass of.
     *
     * @param        $value
     * @param        $class
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function subclassOf($value, $class, $message = '')
    {
        if (!is_subclass_of($value, $class)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected a sub-class of %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($class)
            ));
        }
    }

    /**
     * Implements interface.
     *
     * @param        $value
     * @param        $interface
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function implementsInterface($value, $interface, $message = '')
    {
        if (!in_array($interface, class_implements($value))) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected an implementation of %2$s. Got: %s',
                static::valueToString($value),
                static::valueToString($interface)
            ));
        }
    }

    /**
     * Property exists.
     *
     * @param        $classOrObject
     * @param        $property
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function propertyExists($classOrObject, $property, $message = '')
    {
        if (!property_exists($classOrObject, $property)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected the property %s to exist.',
                static::valueToString($property)
            ));
        }
    }

    /**
     * Property not exists.
     *
     * @param        $classOrObject
     * @param        $property
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function propertyNotExists($classOrObject, $property, $message = '')
    {
        if (property_exists($classOrObject, $property)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected the property %s to not exist.',
                static::valueToString($property)
            ));
        }
    }

    /**
     * Method exists.
     *
     * @param        $classOrObject
     * @param        $method
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function methodExists($classOrObject, $method, $message = '')
    {
        if (!method_exists($classOrObject, $method)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected the method %s to exist.',
                static::valueToString($method)
            ));
        }
    }

    /**
     * Method not exists.
     *
     * @param        $classOrObject
     * @param        $method
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function methodNotExists($classOrObject, $method, $message = '')
    {
        if (method_exists($classOrObject, $method)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected the method %s to not exist.',
                static::valueToString($method)
            ));
        }
    }

    /**
     * Key exists.
     *
     * @param        $array
     * @param        $key
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function keyExists($array, $key, $message = '')
    {
        if (!(isset($array[$key]) || array_key_exists($key, $array))) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected the key %s to exist.',
                static::valueToString($key)
            ));
        }
    }

    /**
     * Key not exists.
     *
     * @param        $array
     * @param        $key
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function keyNotExists($array, $key, $message = '')
    {
        if (isset($array[$key]) || array_key_exists($key, $array)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected the key %s to not exist.',
                static::valueToString($key)
            ));
        }
    }

    /**
     * Count.
     *
     * @param        $array
     * @param        $number
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function count($array, $number, $message = '')
    {
        static::eq(
            count($array),
            $number,
            $message ?: sprintf('Expected an array to contain %d elements. Got: %d.', $number, count($array))
        );
    }

    /**
     * Min count.
     *
     * @param        $array
     * @param        $min
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function minCount($array, $min, $message = '')
    {
        if (count($array) < $min) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected an array to contain at least %2$d elements. Got: %d',
                count($array),
                $min
            ));
        }
    }

    /**
     * Max count.
     *
     * @param        $array
     * @param        $max
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function maxCount($array, $max, $message = '')
    {
        if (count($array) > $max) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected an array to contain at most %2$d elements. Got: %d',
                count($array),
                $max
            ));
        }
    }

    /**
     * Count between.
     *
     * @param        $array
     * @param        $min
     * @param        $max
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function countBetween($array, $min, $max, $message = '')
    {
        $count = count($array);

        if ($count < $min || $count > $max) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Expected an array to contain between %2$d and %3$d elements. Got: %d',
                $count,
                $min,
                $max
            ));
        }
    }

    /**
     * Uuid.
     *
     * @param        $value
     * @param string $message
     *
     * @throws \InvalidArgumentException
     */
    public static function uuid($value, $message = '')
    {
        $value = str_replace(array('urn:', 'uuid:', '{', '}'), '', $value);

        // The nil UUID is special form of UUID that is specified to have all
        // 128 bits set to zero.
        if ('00000000-0000-0000-0000-000000000000' === $value) {
            return;
        }

        if (!preg_match('/^[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}$/', $value)) {
            static::reportInvalidArgument(sprintf(
                $message ?: 'Value %s is not a valid UUID.',
                static::valueToString($value)
            ));
        }
    }

    /**
     * Throws.
     *
     * @param Closure $expression
     * @param string  $class
     * @param string  $message
     *
     * @throws \InvalidArgumentException
     */
    public static function throws(Closure $expression, $class = 'Exception', $message = '')
    {
        static::string($class);

        $actual = 'none';

        try {
            $expression();
        } catch (Exception $e) {
            $actual = get_class($e);
            if ($e instanceof $class) {
                return;
            }
        } catch (Throwable $e) {
            $actual = get_class($e);
            if ($e instanceof $class) {
                return;
            }
        }

        static::reportInvalidArgument($message ?: sprintf(
            'Expected to throw "%s", got "%s"',
            $class,
            $actual
        ));
    }

    /**
     * __call static.
     *
     * @param $name
     * @param $arguments
     *
     * @throws \BadMethodCallException
     */
    public static function __callStatic($name, $arguments)
    {
        if ('nullOr' === substr($name, 0, 6)) {
            if (null !== $arguments[0]) {
                $method = lcfirst(substr($name, 6));
                call_user_func_array(array('static', $method), $arguments);
            }

            return;
        }

        if ('all' === substr($name, 0, 3)) {
            static::isIterable($arguments[0]);

            $method = lcfirst(substr($name, 3));
            $args = $arguments;

            foreach ($arguments[0] as $entry) {
                $args[0] = $entry;

                call_user_func_array(array('static', $method), $args);
            }

            return;
        }

        throw new BadMethodCallException('No such method: '.$name);
    }

    /**
     * Value to string.
     *
     * @param $value
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

        if (is_array($value)) {
            return 'array';
        }

        if (is_object($value)) {
            if (method_exists($value, '__toString')) {
                return get_class($value).': '.self::valueToString($value->__toString());
            }

            return get_class($value);
        }

        if (is_resource($value)) {
            return 'resource';
        }

        if (is_string($value)) {
            return '"'.$value.'"';
        }

        return (string) $value;
    }

    /**
     * Type to string.
     *
     * @param $value
     *
     * @return string
     */
    protected static function typeToString($value)
    {
        return is_object($value) ? get_class($value) : gettype($value);
    }

    /**
     * Strlen.
     *
     * @param $value
     *
     * @return int
     */
    protected static function strlen($value)
    {
        if (!function_exists('mb_detect_encoding')) {
            return strlen($value);
        }

        if (false === $encoding = mb_detect_encoding($value)) {
            return strlen($value);
        }

        return mb_strwidth($value, $encoding);
    }

    /**
     * Report invalid argument.
     *
     * @param $message
     *
     * @throws \InvalidArgumentException
     */
    protected static function reportInvalidArgument($message)
    {
        throw new InvalidArgumentException($message);
    }

    /**
     * Keep the constructor private to avoid creating an instance of this object.
     */
    private function __construct()
    {
    }
}
