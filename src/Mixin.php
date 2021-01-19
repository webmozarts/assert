<?php

/**
 * provides type inference and auto-completion for magic static methods of Assert.
 */

namespace Webmozart\Assert;

use ArrayAccess;
use Closure;
use Countable;
use InvalidArgumentException;
use Throwable;

/**
 * This trait aids static analysis tooling in introspecting assertion magic methods.
 * Do not use this trait directly: it will change, and is not designed for reuse.
 */
trait Mixin
{
    /**
     * @psalm-pure
     * @psalm-assert string|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrString($value, $message = '')
    {
        static::__callStatic('nullOrString', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<string> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allString($value, $message = '')
    {
        static::__callStatic('allString', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert non-empty-string|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrStringNotEmpty($value, $message = '')
    {
        static::__callStatic('nullOrStringNotEmpty', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<non-empty-string> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allStringNotEmpty($value, $message = '')
    {
        static::__callStatic('allStringNotEmpty', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert int|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrInteger($value, $message = '')
    {
        static::__callStatic('nullOrInteger', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<int> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allInteger($value, $message = '')
    {
        static::__callStatic('allInteger', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert numeric|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrIntegerish($value, $message = '')
    {
        static::__callStatic('nullOrIntegerish', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<numeric> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allIntegerish($value, $message = '')
    {
        static::__callStatic('allIntegerish', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert positive-int|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrPositiveInteger($value, $message = '')
    {
        static::__callStatic('nullOrPositiveInteger', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<positive-int> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allPositiveInteger($value, $message = '')
    {
        static::__callStatic('allPositiveInteger', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert float|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrFloat($value, $message = '')
    {
        static::__callStatic('nullOrFloat', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<float> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allFloat($value, $message = '')
    {
        static::__callStatic('allFloat', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert numeric|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrNumeric($value, $message = '')
    {
        static::__callStatic('nullOrNumeric', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<numeric> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allNumeric($value, $message = '')
    {
        static::__callStatic('allNumeric', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert positive-int|0|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrNatural($value, $message = '')
    {
        static::__callStatic('nullOrNatural', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<positive-int|0> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allNatural($value, $message = '')
    {
        static::__callStatic('allNatural', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert bool|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrBoolean($value, $message = '')
    {
        static::__callStatic('nullOrBoolean', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<bool> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allBoolean($value, $message = '')
    {
        static::__callStatic('allBoolean', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert scalar|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrScalar($value, $message = '')
    {
        static::__callStatic('nullOrScalar', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<scalar> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allScalar($value, $message = '')
    {
        static::__callStatic('allScalar', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert object|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrObject($value, $message = '')
    {
        static::__callStatic('nullOrObject', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<object> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allObject($value, $message = '')
    {
        static::__callStatic('allObject', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert resource|null $value
     *
     * @param mixed       $value
     * @param string|null $type    type of resource this should be. @see https://www.php.net/manual/en/function.get-resource-type.php
     * @param string      $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrResource($value, $type = null, $message = '')
    {
        static::__callStatic('nullOrResource', [$value, $type, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<resource> $value
     *
     * @param mixed       $value
     * @param string|null $type    type of resource this should be. @see https://www.php.net/manual/en/function.get-resource-type.php
     * @param string      $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allResource($value, $type = null, $message = '')
    {
        static::__callStatic('allResource', [$value, $type, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert callable|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrIsCallable($value, $message = '')
    {
        static::__callStatic('nullOrIsCallable', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<callable> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allIsCallable($value, $message = '')
    {
        static::__callStatic('allIsCallable', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert array|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrIsArray($value, $message = '')
    {
        static::__callStatic('nullOrIsArray', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<array> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allIsArray($value, $message = '')
    {
        static::__callStatic('allIsArray', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable|null $value
     *
     * @deprecated use "isIterable" or "isInstanceOf" instead
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrIsTraversable($value, $message = '')
    {
        static::__callStatic('nullOrIsTraversable', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<iterable> $value
     *
     * @deprecated use "isIterable" or "isInstanceOf" instead
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allIsTraversable($value, $message = '')
    {
        static::__callStatic('allIsTraversable', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert array|ArrayAccess|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrIsArrayAccessible($value, $message = '')
    {
        static::__callStatic('nullOrIsArrayAccessible', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<array|ArrayAccess> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allIsArrayAccessible($value, $message = '')
    {
        static::__callStatic('allIsArrayAccessible', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert countable|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrIsCountable($value, $message = '')
    {
        static::__callStatic('nullOrIsCountable', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<countable> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allIsCountable($value, $message = '')
    {
        static::__callStatic('allIsCountable', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrIsIterable($value, $message = '')
    {
        static::__callStatic('nullOrIsIterable', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<iterable> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allIsIterable($value, $message = '')
    {
        static::__callStatic('allIsIterable', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert ExpectedType|null $value
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrIsInstanceOf($value, $class, $message = '')
    {
        static::__callStatic('nullOrIsInstanceOf', [$value, $class, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert iterable<ExpectedType> $value
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allIsInstanceOf($value, $class, $message = '')
    {
        static::__callStatic('allIsInstanceOf', [$value, $class, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrNotInstanceOf($value, $class, $message = '')
    {
        static::__callStatic('nullOrNotInstanceOf', [$value, $class, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allNotInstanceOf($value, $class, $message = '')
    {
        static::__callStatic('allNotInstanceOf', [$value, $class, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-param array<class-string> $classes
     *
     * @param mixed                $value
     * @param array<object|string> $classes
     * @param string               $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrIsInstanceOfAny($value, $classes, $message = '')
    {
        static::__callStatic('nullOrIsInstanceOfAny', [$value, $classes, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-param array<class-string> $classes
     *
     * @param mixed                $value
     * @param array<object|string> $classes
     * @param string               $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allIsInstanceOfAny($value, $classes, $message = '')
    {
        static::__callStatic('allIsInstanceOfAny', [$value, $classes, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert ExpectedType|class-string<ExpectedType>|null $value
     *
     * @param object|string|null $value
     * @param string             $class
     * @param string             $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrIsAOf($value, $class, $message = '')
    {
        static::__callStatic('nullOrIsAOf', [$value, $class, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert iterable<ExpectedType|class-string<ExpectedType>> $value
     *
     * @param iterable<object|string> $value
     * @param string                  $class
     * @param string                  $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allIsAOf($value, $class, $message = '')
    {
        static::__callStatic('allIsAOf', [$value, $class, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-template UnexpectedType of object
     * @psalm-param class-string<UnexpectedType> $class
     *
     * @param object|string|null $value
     * @param string             $class
     * @param string             $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrIsNotA($value, $class, $message = '')
    {
        static::__callStatic('nullOrIsNotA', [$value, $class, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-template UnexpectedType of object
     * @psalm-param class-string<UnexpectedType> $class
     *
     * @param iterable<object|string> $value
     * @param string                  $class
     * @param string                  $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allIsNotA($value, $class, $message = '')
    {
        static::__callStatic('allIsNotA', [$value, $class, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-param array<class-string> $classes
     *
     * @param object|string|null $value
     * @param string[]           $classes
     * @param string             $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrIsAnyOf($value, $classes, $message = '')
    {
        static::__callStatic('nullOrIsAnyOf', [$value, $classes, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-param array<class-string> $classes
     *
     * @param iterable<object|string> $value
     * @param string[]                $classes
     * @param string                  $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allIsAnyOf($value, $classes, $message = '')
    {
        static::__callStatic('allIsAnyOf', [$value, $classes, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert empty $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrIsEmpty($value, $message = '')
    {
        static::__callStatic('nullOrIsEmpty', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<empty> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allIsEmpty($value, $message = '')
    {
        static::__callStatic('allIsEmpty', [$value, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrNotEmpty($value, $message = '')
    {
        static::__callStatic('nullOrNotEmpty', [$value, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allNotEmpty($value, $message = '')
    {
        static::__callStatic('allNotEmpty', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<null> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allNull($value, $message = '')
    {
        static::__callStatic('allNull', [$value, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allNotNull($value, $message = '')
    {
        static::__callStatic('allNotNull', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert true|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrTrue($value, $message = '')
    {
        static::__callStatic('nullOrTrue', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<true> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allTrue($value, $message = '')
    {
        static::__callStatic('allTrue', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert false|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrFalse($value, $message = '')
    {
        static::__callStatic('nullOrFalse', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<false> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allFalse($value, $message = '')
    {
        static::__callStatic('allFalse', [$value, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrNotFalse($value, $message = '')
    {
        static::__callStatic('nullOrNotFalse', [$value, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allNotFalse($value, $message = '')
    {
        static::__callStatic('allNotFalse', [$value, $message]);
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrIp($value, $message = '')
    {
        static::__callStatic('nullOrIp', [$value, $message]);
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allIp($value, $message = '')
    {
        static::__callStatic('allIp', [$value, $message]);
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrIpv4($value, $message = '')
    {
        static::__callStatic('nullOrIpv4', [$value, $message]);
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allIpv4($value, $message = '')
    {
        static::__callStatic('allIpv4', [$value, $message]);
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrIpv6($value, $message = '')
    {
        static::__callStatic('nullOrIpv6', [$value, $message]);
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allIpv6($value, $message = '')
    {
        static::__callStatic('allIpv6', [$value, $message]);
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrEmail($value, $message = '')
    {
        static::__callStatic('nullOrEmail', [$value, $message]);
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allEmail($value, $message = '')
    {
        static::__callStatic('allEmail', [$value, $message]);
    }

    /**
     * @param array|null $values
     * @param string     $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrUniqueValues($values, $message = '')
    {
        static::__callStatic('nullOrUniqueValues', [$values, $message]);
    }

    /**
     * @param iterable<array> $values
     * @param string          $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allUniqueValues($values, $message = '')
    {
        static::__callStatic('allUniqueValues', [$values, $message]);
    }

    /**
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrEq($value, $expect, $message = '')
    {
        static::__callStatic('nullOrEq', [$value, $expect, $message]);
    }

    /**
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allEq($value, $expect, $message = '')
    {
        static::__callStatic('allEq', [$value, $expect, $message]);
    }

    /**
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrNotEq($value, $expect, $message = '')
    {
        static::__callStatic('nullOrNotEq', [$value, $expect, $message]);
    }

    /**
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allNotEq($value, $expect, $message = '')
    {
        static::__callStatic('allNotEq', [$value, $expect, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrSame($value, $expect, $message = '')
    {
        static::__callStatic('nullOrSame', [$value, $expect, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allSame($value, $expect, $message = '')
    {
        static::__callStatic('allSame', [$value, $expect, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrNotSame($value, $expect, $message = '')
    {
        static::__callStatic('nullOrNotSame', [$value, $expect, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $expect
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allNotSame($value, $expect, $message = '')
    {
        static::__callStatic('allNotSame', [$value, $expect, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrGreaterThan($value, $limit, $message = '')
    {
        static::__callStatic('nullOrGreaterThan', [$value, $limit, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allGreaterThan($value, $limit, $message = '')
    {
        static::__callStatic('allGreaterThan', [$value, $limit, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrGreaterThanEq($value, $limit, $message = '')
    {
        static::__callStatic('nullOrGreaterThanEq', [$value, $limit, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allGreaterThanEq($value, $limit, $message = '')
    {
        static::__callStatic('allGreaterThanEq', [$value, $limit, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrLessThan($value, $limit, $message = '')
    {
        static::__callStatic('nullOrLessThan', [$value, $limit, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allLessThan($value, $limit, $message = '')
    {
        static::__callStatic('allLessThan', [$value, $limit, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrLessThanEq($value, $limit, $message = '')
    {
        static::__callStatic('nullOrLessThanEq', [$value, $limit, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $limit
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allLessThanEq($value, $limit, $message = '')
    {
        static::__callStatic('allLessThanEq', [$value, $limit, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $min
     * @param mixed  $max
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrRange($value, $min, $max, $message = '')
    {
        static::__callStatic('nullOrRange', [$value, $min, $max, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param mixed  $min
     * @param mixed  $max
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allRange($value, $min, $max, $message = '')
    {
        static::__callStatic('allRange', [$value, $min, $max, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param array  $values
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrOneOf($value, $values, $message = '')
    {
        static::__callStatic('nullOrOneOf', [$value, $values, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param array  $values
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allOneOf($value, $values, $message = '')
    {
        static::__callStatic('allOneOf', [$value, $values, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param array  $values
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrInArray($value, $values, $message = '')
    {
        static::__callStatic('nullOrInArray', [$value, $values, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param array  $values
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allInArray($value, $values, $message = '')
    {
        static::__callStatic('allInArray', [$value, $values, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param string|null $value
     * @param string      $subString
     * @param string      $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrContains($value, $subString, $message = '')
    {
        static::__callStatic('nullOrContains', [$value, $subString, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $subString
     * @param string           $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allContains($value, $subString, $message = '')
    {
        static::__callStatic('allContains', [$value, $subString, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param string|null $value
     * @param string      $subString
     * @param string      $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrNotContains($value, $subString, $message = '')
    {
        static::__callStatic('nullOrNotContains', [$value, $subString, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $subString
     * @param string           $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allNotContains($value, $subString, $message = '')
    {
        static::__callStatic('allNotContains', [$value, $subString, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param string|null $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrNotWhitespaceOnly($value, $message = '')
    {
        static::__callStatic('nullOrNotWhitespaceOnly', [$value, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allNotWhitespaceOnly($value, $message = '')
    {
        static::__callStatic('allNotWhitespaceOnly', [$value, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param string|null $value
     * @param string      $prefix
     * @param string      $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrStartsWith($value, $prefix, $message = '')
    {
        static::__callStatic('nullOrStartsWith', [$value, $prefix, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $prefix
     * @param string           $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allStartsWith($value, $prefix, $message = '')
    {
        static::__callStatic('allStartsWith', [$value, $prefix, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param string|null $value
     * @param string      $prefix
     * @param string      $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrNotStartsWith($value, $prefix, $message = '')
    {
        static::__callStatic('nullOrNotStartsWith', [$value, $prefix, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $prefix
     * @param string           $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allNotStartsWith($value, $prefix, $message = '')
    {
        static::__callStatic('allNotStartsWith', [$value, $prefix, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrStartsWithLetter($value, $message = '')
    {
        static::__callStatic('nullOrStartsWithLetter', [$value, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allStartsWithLetter($value, $message = '')
    {
        static::__callStatic('allStartsWithLetter', [$value, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param string|null $value
     * @param string      $suffix
     * @param string      $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrEndsWith($value, $suffix, $message = '')
    {
        static::__callStatic('nullOrEndsWith', [$value, $suffix, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $suffix
     * @param string           $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allEndsWith($value, $suffix, $message = '')
    {
        static::__callStatic('allEndsWith', [$value, $suffix, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param string|null $value
     * @param string      $suffix
     * @param string      $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrNotEndsWith($value, $suffix, $message = '')
    {
        static::__callStatic('nullOrNotEndsWith', [$value, $suffix, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $suffix
     * @param string           $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allNotEndsWith($value, $suffix, $message = '')
    {
        static::__callStatic('allNotEndsWith', [$value, $suffix, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param string|null $value
     * @param string      $pattern
     * @param string      $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrRegex($value, $pattern, $message = '')
    {
        static::__callStatic('nullOrRegex', [$value, $pattern, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $pattern
     * @param string           $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allRegex($value, $pattern, $message = '')
    {
        static::__callStatic('allRegex', [$value, $pattern, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param string|null $value
     * @param string      $pattern
     * @param string      $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrNotRegex($value, $pattern, $message = '')
    {
        static::__callStatic('nullOrNotRegex', [$value, $pattern, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $pattern
     * @param string           $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allNotRegex($value, $pattern, $message = '')
    {
        static::__callStatic('allNotRegex', [$value, $pattern, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrUnicodeLetters($value, $message = '')
    {
        static::__callStatic('nullOrUnicodeLetters', [$value, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allUnicodeLetters($value, $message = '')
    {
        static::__callStatic('allUnicodeLetters', [$value, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrAlpha($value, $message = '')
    {
        static::__callStatic('nullOrAlpha', [$value, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allAlpha($value, $message = '')
    {
        static::__callStatic('allAlpha', [$value, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param string|null $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrDigits($value, $message = '')
    {
        static::__callStatic('nullOrDigits', [$value, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allDigits($value, $message = '')
    {
        static::__callStatic('allDigits', [$value, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param string|null $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrAlnum($value, $message = '')
    {
        static::__callStatic('nullOrAlnum', [$value, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allAlnum($value, $message = '')
    {
        static::__callStatic('allAlnum', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert lowercase-string|null $value
     *
     * @param string|null $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrLower($value, $message = '')
    {
        static::__callStatic('nullOrLower', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<lowercase-string> $value
     *
     * @param iterable<string> $value
     * @param string           $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allLower($value, $message = '')
    {
        static::__callStatic('allLower', [$value, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param string|null $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrUpper($value, $message = '')
    {
        static::__callStatic('nullOrUpper', [$value, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allUpper($value, $message = '')
    {
        static::__callStatic('allUpper', [$value, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param string|null $value
     * @param int         $length
     * @param string      $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrLength($value, $length, $message = '')
    {
        static::__callStatic('nullOrLength', [$value, $length, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param int              $length
     * @param string           $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allLength($value, $length, $message = '')
    {
        static::__callStatic('allLength', [$value, $length, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param string|null $value
     * @param int|float   $min
     * @param string      $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrMinLength($value, $min, $message = '')
    {
        static::__callStatic('nullOrMinLength', [$value, $min, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param int|float        $min
     * @param string           $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allMinLength($value, $min, $message = '')
    {
        static::__callStatic('allMinLength', [$value, $min, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param string|null $value
     * @param int|float   $max
     * @param string      $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrMaxLength($value, $max, $message = '')
    {
        static::__callStatic('nullOrMaxLength', [$value, $max, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param int|float        $max
     * @param string           $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allMaxLength($value, $max, $message = '')
    {
        static::__callStatic('allMaxLength', [$value, $max, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param string|null $value
     * @param int|float   $min
     * @param int|float   $max
     * @param string      $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrLengthBetween($value, $min, $max, $message = '')
    {
        static::__callStatic('nullOrLengthBetween', [$value, $min, $max, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param int|float        $min
     * @param int|float        $max
     * @param string           $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allLengthBetween($value, $min, $max, $message = '')
    {
        static::__callStatic('allLengthBetween', [$value, $min, $max, $message]);
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrFileExists($value, $message = '')
    {
        static::__callStatic('nullOrFileExists', [$value, $message]);
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allFileExists($value, $message = '')
    {
        static::__callStatic('allFileExists', [$value, $message]);
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrFile($value, $message = '')
    {
        static::__callStatic('nullOrFile', [$value, $message]);
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allFile($value, $message = '')
    {
        static::__callStatic('allFile', [$value, $message]);
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrDirectory($value, $message = '')
    {
        static::__callStatic('nullOrDirectory', [$value, $message]);
    }

    /**
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allDirectory($value, $message = '')
    {
        static::__callStatic('allDirectory', [$value, $message]);
    }

    /**
     * @param string|null $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrReadable($value, $message = '')
    {
        static::__callStatic('nullOrReadable', [$value, $message]);
    }

    /**
     * @param iterable<string> $value
     * @param string           $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allReadable($value, $message = '')
    {
        static::__callStatic('allReadable', [$value, $message]);
    }

    /**
     * @param string|null $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrWritable($value, $message = '')
    {
        static::__callStatic('nullOrWritable', [$value, $message]);
    }

    /**
     * @param iterable<string> $value
     * @param string           $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allWritable($value, $message = '')
    {
        static::__callStatic('allWritable', [$value, $message]);
    }

    /**
     * @psalm-assert class-string|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrClassExists($value, $message = '')
    {
        static::__callStatic('nullOrClassExists', [$value, $message]);
    }

    /**
     * @psalm-assert iterable<class-string> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allClassExists($value, $message = '')
    {
        static::__callStatic('allClassExists', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert class-string<ExpectedType>|ExpectedType|null $value
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrSubclassOf($value, $class, $message = '')
    {
        static::__callStatic('nullOrSubclassOf', [$value, $class, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @psalm-assert iterable<class-string<ExpectedType>|ExpectedType> $value
     *
     * @param mixed         $value
     * @param string|object $class
     * @param string        $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allSubclassOf($value, $class, $message = '')
    {
        static::__callStatic('allSubclassOf', [$value, $class, $message]);
    }

    /**
     * @psalm-assert class-string|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrInterfaceExists($value, $message = '')
    {
        static::__callStatic('nullOrInterfaceExists', [$value, $message]);
    }

    /**
     * @psalm-assert iterable<class-string> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allInterfaceExists($value, $message = '')
    {
        static::__callStatic('allInterfaceExists', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $interface
     * @psalm-assert class-string<ExpectedType>|null $value
     *
     * @param mixed  $value
     * @param mixed  $interface
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrImplementsInterface($value, $interface, $message = '')
    {
        static::__callStatic('nullOrImplementsInterface', [$value, $interface, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $interface
     * @psalm-assert iterable<class-string<ExpectedType>> $value
     *
     * @param mixed  $value
     * @param mixed  $interface
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allImplementsInterface($value, $interface, $message = '')
    {
        static::__callStatic('allImplementsInterface', [$value, $interface, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-param class-string|object|null $classOrObject
     *
     * @param string|object|null $classOrObject
     * @param mixed              $property
     * @param string             $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrPropertyExists($classOrObject, $property, $message = '')
    {
        static::__callStatic('nullOrPropertyExists', [$classOrObject, $property, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-param iterable<class-string|object> $classOrObject
     *
     * @param iterable<string|object> $classOrObject
     * @param mixed                   $property
     * @param string                  $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allPropertyExists($classOrObject, $property, $message = '')
    {
        static::__callStatic('allPropertyExists', [$classOrObject, $property, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-param class-string|object|null $classOrObject
     *
     * @param string|object|null $classOrObject
     * @param mixed              $property
     * @param string             $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrPropertyNotExists($classOrObject, $property, $message = '')
    {
        static::__callStatic('nullOrPropertyNotExists', [$classOrObject, $property, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-param iterable<class-string|object> $classOrObject
     *
     * @param iterable<string|object> $classOrObject
     * @param mixed                   $property
     * @param string                  $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allPropertyNotExists($classOrObject, $property, $message = '')
    {
        static::__callStatic('allPropertyNotExists', [$classOrObject, $property, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-param class-string|object|null $classOrObject
     *
     * @param string|object|null $classOrObject
     * @param mixed              $method
     * @param string             $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrMethodExists($classOrObject, $method, $message = '')
    {
        static::__callStatic('nullOrMethodExists', [$classOrObject, $method, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-param iterable<class-string|object> $classOrObject
     *
     * @param iterable<string|object> $classOrObject
     * @param mixed                   $method
     * @param string                  $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allMethodExists($classOrObject, $method, $message = '')
    {
        static::__callStatic('allMethodExists', [$classOrObject, $method, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-param class-string|object|null $classOrObject
     *
     * @param string|object|null $classOrObject
     * @param mixed              $method
     * @param string             $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrMethodNotExists($classOrObject, $method, $message = '')
    {
        static::__callStatic('nullOrMethodNotExists', [$classOrObject, $method, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-param iterable<class-string|object> $classOrObject
     *
     * @param iterable<string|object> $classOrObject
     * @param mixed                   $method
     * @param string                  $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allMethodNotExists($classOrObject, $method, $message = '')
    {
        static::__callStatic('allMethodNotExists', [$classOrObject, $method, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param array|null $array
     * @param string|int $key
     * @param string     $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrKeyExists($array, $key, $message = '')
    {
        static::__callStatic('nullOrKeyExists', [$array, $key, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param iterable<array> $array
     * @param string|int      $key
     * @param string          $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allKeyExists($array, $key, $message = '')
    {
        static::__callStatic('allKeyExists', [$array, $key, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param array|null $array
     * @param string|int $key
     * @param string     $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrKeyNotExists($array, $key, $message = '')
    {
        static::__callStatic('nullOrKeyNotExists', [$array, $key, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param iterable<array> $array
     * @param string|int      $key
     * @param string          $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allKeyNotExists($array, $key, $message = '')
    {
        static::__callStatic('allKeyNotExists', [$array, $key, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert array-key|null $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrValidArrayKey($value, $message = '')
    {
        static::__callStatic('nullOrValidArrayKey', [$value, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<array-key> $value
     *
     * @param mixed  $value
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allValidArrayKey($value, $message = '')
    {
        static::__callStatic('allValidArrayKey', [$value, $message]);
    }

    /**
     * @param Countable|array|null $array
     * @param int                  $number
     * @param string               $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrCount($array, $number, $message = '')
    {
        static::__callStatic('nullOrCount', [$array, $number, $message]);
    }

    /**
     * @param iterable<Countable|array> $array
     * @param int                       $number
     * @param string                    $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allCount($array, $number, $message = '')
    {
        static::__callStatic('allCount', [$array, $number, $message]);
    }

    /**
     * @param Countable|array|null $array
     * @param int|float            $min
     * @param string               $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrMinCount($array, $min, $message = '')
    {
        static::__callStatic('nullOrMinCount', [$array, $min, $message]);
    }

    /**
     * @param iterable<Countable|array> $array
     * @param int|float                 $min
     * @param string                    $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allMinCount($array, $min, $message = '')
    {
        static::__callStatic('allMinCount', [$array, $min, $message]);
    }

    /**
     * @param Countable|array|null $array
     * @param int|float            $max
     * @param string               $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrMaxCount($array, $max, $message = '')
    {
        static::__callStatic('nullOrMaxCount', [$array, $max, $message]);
    }

    /**
     * @param iterable<Countable|array> $array
     * @param int|float                 $max
     * @param string                    $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allMaxCount($array, $max, $message = '')
    {
        static::__callStatic('allMaxCount', [$array, $max, $message]);
    }

    /**
     * @param Countable|array|null $array
     * @param int|float            $min
     * @param int|float            $max
     * @param string               $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrCountBetween($array, $min, $max, $message = '')
    {
        static::__callStatic('nullOrCountBetween', [$array, $min, $max, $message]);
    }

    /**
     * @param iterable<Countable|array> $array
     * @param int|float                 $min
     * @param int|float                 $max
     * @param string                    $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allCountBetween($array, $min, $max, $message = '')
    {
        static::__callStatic('allCountBetween', [$array, $min, $max, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert list|null $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrIsList($array, $message = '')
    {
        static::__callStatic('nullOrIsList', [$array, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<list> $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allIsList($array, $message = '')
    {
        static::__callStatic('allIsList', [$array, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert non-empty-list|null $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrIsNonEmptyList($array, $message = '')
    {
        static::__callStatic('nullOrIsNonEmptyList', [$array, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-assert iterable<non-empty-list> $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allIsNonEmptyList($array, $message = '')
    {
        static::__callStatic('allIsNonEmptyList', [$array, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-template T
     * @psalm-param mixed|array<T>|null $array
     * @psalm-assert array<string, T>|null $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrIsMap($array, $message = '')
    {
        static::__callStatic('nullOrIsMap', [$array, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-template T
     * @psalm-param iterable<mixed|array<T>> $array
     * @psalm-assert iterable<array<string, T>> $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allIsMap($array, $message = '')
    {
        static::__callStatic('allIsMap', [$array, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-template T
     * @psalm-param mixed|array<T>|null $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrIsNonEmptyMap($array, $message = '')
    {
        static::__callStatic('nullOrIsNonEmptyMap', [$array, $message]);
    }

    /**
     * @psalm-pure
     * @psalm-template T
     * @psalm-param iterable<mixed|array<T>> $array
     *
     * @param mixed  $array
     * @param string $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allIsNonEmptyMap($array, $message = '')
    {
        static::__callStatic('allIsNonEmptyMap', [$array, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param string|null $value
     * @param string      $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrUuid($value, $message = '')
    {
        static::__callStatic('nullOrUuid', [$value, $message]);
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string> $value
     * @param string           $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allUuid($value, $message = '')
    {
        static::__callStatic('allUuid', [$value, $message]);
    }

    /**
     * @psalm-param class-string<Throwable> $class
     *
     * @param Closure|null $expression
     * @param string       $class
     * @param string       $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function nullOrThrows($expression, $class = 'Exception', $message = '')
    {
        static::__callStatic('nullOrThrows', [$expression, $class, $message]);
    }

    /**
     * @psalm-param class-string<Throwable> $class
     *
     * @param iterable<Closure> $expression
     * @param string            $class
     * @param string            $message
     *
     * @throws InvalidArgumentException
     * @return void
     */
    public static function allThrows($expression, $class = 'Exception', $message = '')
    {
        static::__callStatic('allThrows', [$expression, $class, $message]);
    }
}