<?php

namespace Webmozart\Assert;

use ArrayAccess;
use Countable;

/**
 * This trait provides nullOr*, all* and allNullOr* variants of assertion base methods.
 * Do not use this trait directly: it will change, and is not designed for reuse.
 */
trait Mixin
{
    /**
     * @psalm-pure
     *
     * @psalm-assert string|null $value
     * @throws InvalidArgumentException
     */
    public static function nullOrString(mixed $value, string $message = ''): void
    {
        null === $value || static::string($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<string> $value
     * @throws InvalidArgumentException
     */
    public static function allString(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::string($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<string|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrString(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::string($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert non-empty-string|null $value
     * @throws InvalidArgumentException
     */
    public static function nullOrStringNotEmpty(mixed $value, string $message = ''): void
    {
        null === $value || static::stringNotEmpty($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<non-empty-string> $value
     * @throws InvalidArgumentException
     */
    public static function allStringNotEmpty(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::stringNotEmpty($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<non-empty-string|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrStringNotEmpty(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::stringNotEmpty($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert int|null $value
     * @throws InvalidArgumentException
     */
    public static function nullOrInteger(mixed $value, string $message = ''): void
    {
        null === $value || static::integer($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<int> $value
     * @throws InvalidArgumentException
     */
    public static function allInteger(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::integer($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<int|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrInteger(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::integer($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert numeric|null $value
     * @throws InvalidArgumentException
     */
    public static function nullOrIntegerish(mixed $value, string $message = ''): void
    {
        null === $value || static::integerish($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<numeric> $value
     * @throws InvalidArgumentException
     */
    public static function allIntegerish(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::integerish($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<numeric|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrIntegerish(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::integerish($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert positive-int|null $value
     * @throws InvalidArgumentException
     */
    public static function nullOrPositiveInteger(mixed $value, string $message = ''): void
    {
        null === $value || static::positiveInteger($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<positive-int> $value
     * @throws InvalidArgumentException
     */
    public static function allPositiveInteger(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::positiveInteger($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<positive-int|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrPositiveInteger(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::positiveInteger($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert float|null $value
     * @throws InvalidArgumentException
     */
    public static function nullOrFloat(mixed $value, string $message = ''): void
    {
        null === $value || static::float($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<float> $value
     * @throws InvalidArgumentException
     */
    public static function allFloat(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::float($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<float|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrFloat(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::float($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert numeric|null $value
     * @throws InvalidArgumentException
     */
    public static function nullOrNumeric(mixed $value, string $message = ''): void
    {
        null === $value || static::numeric($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<numeric> $value
     * @throws InvalidArgumentException
     */
    public static function allNumeric(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::numeric($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<numeric|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrNumeric(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::numeric($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert positive-int|0|null $value
     * @throws InvalidArgumentException
     */
    public static function nullOrNatural(mixed $value, string $message = ''): void
    {
        null === $value || static::natural($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<positive-int|0> $value
     * @throws InvalidArgumentException
     */
    public static function allNatural(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::natural($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<positive-int|0|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrNatural(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::natural($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert bool|null $value
     * @throws InvalidArgumentException
     */
    public static function nullOrBoolean(mixed $value, string $message = ''): void
    {
        null === $value || static::boolean($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<bool> $value
     * @throws InvalidArgumentException
     */
    public static function allBoolean(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::boolean($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<bool|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrBoolean(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::boolean($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert scalar|null $value
     * @throws InvalidArgumentException
     */
    public static function nullOrScalar(mixed $value, string $message = ''): void
    {
        null === $value || static::scalar($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<scalar> $value
     * @throws InvalidArgumentException
     */
    public static function allScalar(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::scalar($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<scalar|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrScalar(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::scalar($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert object|null $value
     * @throws InvalidArgumentException
     */
    public static function nullOrObject(mixed $value, string $message = ''): void
    {
        null === $value || static::object($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<object> $value
     * @throws InvalidArgumentException
     */
    public static function allObject(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::object($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<object|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrObject(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::object($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert resource|null $value
     *
     * @param string|null $type type of resource this should be. @see https://www.php.net/manual/en/function.get-resource-type.php
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrResource(mixed $value, ?string $type = null, string $message = ''): void
    {
        null === $value || static::resource($value, $type, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<resource> $value
     *
     * @param string|null $type type of resource this should be. @see https://www.php.net/manual/en/function.get-resource-type.php
     *
     * @throws InvalidArgumentException
     */
    public static function allResource(iterable $value, ?string $type = null, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::resource($entry, $type, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<resource|null> $value
     *
     * @param string|null $type type of resource this should be. @see https://www.php.net/manual/en/function.get-resource-type.php
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrResource(?iterable $value, ?string $type = null, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::resource($entry, $type, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert callable|null $value
     * @throws InvalidArgumentException
     */
    public static function nullOrIsCallable(mixed $value, string $message = ''): void
    {
        null === $value || static::isCallable($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<callable> $value
     * @throws InvalidArgumentException
     */
    public static function allIsCallable(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isCallable($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<callable|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsCallable(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isCallable($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert array|null $value
     * @throws InvalidArgumentException
     */
    public static function nullOrIsArray(mixed $value, string $message = ''): void
    {
        null === $value || static::isArray($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<array> $value
     * @throws InvalidArgumentException
     */
    public static function allIsArray(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isArray($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<array|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsArray(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isArray($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable|null $value
     *
     * @deprecated use "isIterable" or "isInstanceOf" instead
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsTraversable(mixed $value, string $message = ''): void
    {
        null === $value || static::isTraversable($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<iterable> $value
     *
     * @deprecated use "isIterable" or "isInstanceOf" instead
     *
     * @throws InvalidArgumentException
     */
    public static function allIsTraversable(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isTraversable($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<iterable|null> $value
     *
     * @deprecated use "isIterable" or "isInstanceOf" instead
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsTraversable(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isTraversable($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert array|ArrayAccess|null $value
     * @throws InvalidArgumentException
     */
    public static function nullOrIsArrayAccessible(mixed $value, string $message = ''): void
    {
        null === $value || static::isArrayAccessible($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<array|ArrayAccess> $value
     * @throws InvalidArgumentException
     */
    public static function allIsArrayAccessible(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isArrayAccessible($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<array|ArrayAccess|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsArrayAccessible(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isArrayAccessible($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert countable|null $value
     * @throws InvalidArgumentException
     */
    public static function nullOrIsCountable(mixed $value, string $message = ''): void
    {
        null === $value || static::isCountable($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<countable> $value
     * @throws InvalidArgumentException
     */
    public static function allIsCountable(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isCountable($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<countable|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsCountable(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isCountable($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable|null $value
     * @throws InvalidArgumentException
     */
    public static function nullOrIsIterable(mixed $value, string $message = ''): void
    {
        null === $value || static::isIterable($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<iterable> $value
     * @throws InvalidArgumentException
     */
    public static function allIsIterable(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isIterable($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<iterable|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsIterable(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isIterable($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-template ExpectedType of object
     * @psalm-assert ExpectedType|null $value
     *
     * @param string|object $class
     *
     * @psalm-param class-string<ExpectedType> $class
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsInstanceOf(mixed $value, mixed $class, string $message = ''): void
    {
        null === $value || static::isInstanceOf($value, $class, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-template ExpectedType of object
     * @psalm-assert iterable<ExpectedType> $value
     *
     * @param string|object $class
     *
     * @psalm-param class-string<ExpectedType> $class
     *
     * @throws InvalidArgumentException
     */
    public static function allIsInstanceOf(iterable $value, mixed $class, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isInstanceOf($entry, $class, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-template ExpectedType of object
     * @psalm-assert iterable<ExpectedType|null> $value
     *
     * @param string|object $class
     *
     * @psalm-param class-string<ExpectedType> $class
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsInstanceOf(?iterable $value, mixed $class, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isInstanceOf($entry, $class, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @throws InvalidArgumentException
     */
    public static function nullOrNotInstanceOf(mixed $value, mixed $class, string $message = ''): void
    {
        null === $value || static::notInstanceOf($value, $class, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $class
     * @throws InvalidArgumentException
     */
    public static function allNotInstanceOf(iterable $value, mixed $class, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notInstanceOf($entry, $class, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-template ExpectedType of object
     * @psalm-assert iterable<!ExpectedType|null> $value
     * @psalm-param class-string<ExpectedType> $class
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotInstanceOf(?iterable $value, mixed $class, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notInstanceOf($entry, $class, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @param array<object|string> $classes
     *
     * @psalm-param array<class-string> $classes
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsInstanceOfAny(mixed $value, mixed $classes, string $message = ''): void
    {
        null === $value || static::isInstanceOfAny($value, $classes, $message);
    }

    /**
     * @psalm-pure
     *
     * @param array<object|string> $classes
     *
     * @psalm-param array<class-string> $classes
     *
     * @throws InvalidArgumentException
     */
    public static function allIsInstanceOfAny(iterable $value, mixed $classes, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isInstanceOfAny($entry, $classes, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @param array<object|string> $classes
     *
     * @psalm-param array<class-string> $classes
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsInstanceOfAny(?iterable $value, mixed $classes, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isInstanceOfAny($entry, $classes, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-template ExpectedType of object
     * @psalm-assert ExpectedType|class-string<ExpectedType>|null $value
     *
     * @param object|string|null $value
     *
     * @psalm-param class-string<ExpectedType> $class
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsAOf(mixed $value, mixed $class, string $message = ''): void
    {
        null === $value || static::isAOf($value, $class, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-template ExpectedType of object
     * @psalm-assert iterable<ExpectedType|class-string<ExpectedType>> $value
     *
     * @param iterable<object|string> $value
     *
     * @psalm-param class-string<ExpectedType> $class
     *
     * @throws InvalidArgumentException
     */
    public static function allIsAOf(iterable $value, mixed $class, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isAOf($entry, $class, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-template ExpectedType of object
     * @psalm-assert iterable<ExpectedType|class-string<ExpectedType>|null> $value
     *
     * @param iterable<object|string|null> $value
     *
     * @psalm-param class-string<ExpectedType> $class
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsAOf(?iterable $value, mixed $class, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isAOf($entry, $class, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-template UnexpectedType of object
     *
     * @param object|string|null $value
     *
     * @psalm-param class-string<UnexpectedType> $class
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsNotA(mixed $value, mixed $class, string $message = ''): void
    {
        null === $value || static::isNotA($value, $class, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-template UnexpectedType of object
     *
     * @param iterable<object|string> $value
     *
     * @psalm-param class-string<UnexpectedType> $class
     *
     * @throws InvalidArgumentException
     */
    public static function allIsNotA(iterable $value, mixed $class, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isNotA($entry, $class, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-template UnexpectedType of object
     * @psalm-assert iterable<!UnexpectedType|null> $value
     * @psalm-assert iterable<!class-string<UnexpectedType>|null> $value
     *
     * @param iterable<object|string|null> $value
     *
     * @psalm-param class-string<UnexpectedType> $class
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsNotA(?iterable $value, mixed $class, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isNotA($entry, $class, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @param object|string|null $value
     * @param string[]           $classes
     *
     * @psalm-param array<class-string> $classes
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsAnyOf(mixed $value, mixed $classes, string $message = ''): void
    {
        null === $value || static::isAnyOf($value, $classes, $message);
    }

    /**
     * @psalm-pure
     *
     * @param iterable<object|string> $value
     * @param string[]                $classes
     *
     * @psalm-param array<class-string> $classes
     *
     * @throws InvalidArgumentException
     */
    public static function allIsAnyOf(iterable $value, mixed $classes, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isAnyOf($entry, $classes, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @param iterable<object|string|null> $value
     * @param string[]                     $classes
     *
     * @psalm-param array<class-string> $classes
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsAnyOf(?iterable $value, mixed $classes, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isAnyOf($entry, $classes, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert empty $value
     * @throws InvalidArgumentException
     */
    public static function nullOrIsEmpty(mixed $value, string $message = ''): void
    {
        null === $value || static::isEmpty($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<empty> $value
     * @throws InvalidArgumentException
     */
    public static function allIsEmpty(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isEmpty($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<empty|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsEmpty(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isEmpty($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotEmpty(mixed $value, string $message = ''): void
    {
        null === $value || static::notEmpty($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNotEmpty(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notEmpty($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<!empty|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotEmpty(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notEmpty($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<null> $value
     * @throws InvalidArgumentException
     */
    public static function allNull(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::null($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNotNull(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notNull($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert true|null $value
     * @throws InvalidArgumentException
     */
    public static function nullOrTrue(mixed $value, string $message = ''): void
    {
        null === $value || static::true($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<true> $value
     * @throws InvalidArgumentException
     */
    public static function allTrue(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::true($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<true|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrTrue(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::true($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert false|null $value
     * @throws InvalidArgumentException
     */
    public static function nullOrFalse(mixed $value, string $message = ''): void
    {
        null === $value || static::false($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<false> $value
     * @throws InvalidArgumentException
     */
    public static function allFalse(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::false($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<false|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrFalse(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::false($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotFalse(mixed $value, string $message = ''): void
    {
        null === $value || static::notFalse($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNotFalse(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notFalse($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<!false|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotFalse(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notFalse($entry, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function nullOrIp(mixed $value, string $message = ''): void
    {
        null === $value || static::ip($value, $message);
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allIp(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::ip($entry, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allNullOrIp(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::ip($entry, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function nullOrIpv4(mixed $value, string $message = ''): void
    {
        null === $value || static::ipv4($value, $message);
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allIpv4(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::ipv4($entry, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allNullOrIpv4(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::ipv4($entry, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function nullOrIpv6(mixed $value, string $message = ''): void
    {
        null === $value || static::ipv6($value, $message);
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allIpv6(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::ipv6($entry, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allNullOrIpv6(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::ipv6($entry, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function nullOrEmail(mixed $value, string $message = ''): void
    {
        null === $value || static::email($value, $message);
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allEmail(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::email($entry, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allNullOrEmail(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::email($entry, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function nullOrUniqueValues(mixed $values, string $message = ''): void
    {
        null === $values || static::uniqueValues($values, $message);
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allUniqueValues(mixed $values, string $message = ''): void
    {
        static::isIterable($values);

        foreach ($values as $entry) {
            static::uniqueValues($entry, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allNullOrUniqueValues(mixed $values, string $message = ''): void
    {
        static::isIterable($values);

        foreach ($values as $entry) {
            null === $entry || static::uniqueValues($entry, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function nullOrEq(mixed $value, mixed $expect, string $message = ''): void
    {
        null === $value || static::eq($value, $expect, $message);
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allEq(iterable $value, mixed $expect, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::eq($entry, $expect, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allNullOrEq(?iterable $value, mixed $expect, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::eq($entry, $expect, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function nullOrNotEq(mixed $value, mixed $expect, string $message = ''): void
    {
        null === $value || static::notEq($value, $expect, $message);
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allNotEq(iterable $value, mixed $expect, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notEq($entry, $expect, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotEq(?iterable $value, mixed $expect, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notEq($entry, $expect, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrSame(mixed $value, mixed $expect, string $message = ''): void
    {
        null === $value || static::same($value, $expect, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allSame(iterable $value, mixed $expect, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::same($entry, $expect, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrSame(?iterable $value, mixed $expect, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::same($entry, $expect, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotSame(mixed $value, mixed $expect, string $message = ''): void
    {
        null === $value || static::notSame($value, $expect, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNotSame(iterable $value, mixed $expect, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notSame($entry, $expect, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotSame(?iterable $value, mixed $expect, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notSame($entry, $expect, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrGreaterThan(mixed $value, mixed $limit, string $message = ''): void
    {
        null === $value || static::greaterThan($value, $limit, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allGreaterThan(iterable $value, mixed $limit, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::greaterThan($entry, $limit, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrGreaterThan(?iterable $value, mixed $limit, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::greaterThan($entry, $limit, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrGreaterThanEq(mixed $value, mixed $limit, string $message = ''): void
    {
        null === $value || static::greaterThanEq($value, $limit, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allGreaterThanEq(iterable $value, mixed $limit, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::greaterThanEq($entry, $limit, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrGreaterThanEq(?iterable $value, mixed $limit, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::greaterThanEq($entry, $limit, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrLessThan(mixed $value, mixed $limit, string $message = ''): void
    {
        null === $value || static::lessThan($value, $limit, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allLessThan(iterable $value, mixed $limit, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::lessThan($entry, $limit, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrLessThan(?iterable $value, mixed $limit, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::lessThan($entry, $limit, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrLessThanEq(mixed $value, mixed $limit, string $message = ''): void
    {
        null === $value || static::lessThanEq($value, $limit, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allLessThanEq(iterable $value, mixed $limit, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::lessThanEq($entry, $limit, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrLessThanEq(?iterable $value, mixed $limit, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::lessThanEq($entry, $limit, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrRange(mixed $value, mixed $min, mixed $max, string $message = ''): void
    {
        null === $value || static::range($value, $min, $max, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allRange(iterable $value, mixed $min, mixed $max, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::range($entry, $min, $max, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrRange(?iterable $value, mixed $min, mixed $max, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::range($entry, $min, $max, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrOneOf(mixed $value, mixed $values, string $message = ''): void
    {
        null === $value || static::oneOf($value, $values, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allOneOf(iterable $value, mixed $values, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::oneOf($entry, $values, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrOneOf(?iterable $value, mixed $values, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::oneOf($entry, $values, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrInArray(mixed $value, mixed $values, string $message = ''): void
    {
        null === $value || static::inArray($value, $values, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allInArray(iterable $value, mixed $values, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::inArray($entry, $values, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrInArray(?iterable $value, mixed $values, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::inArray($entry, $values, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrContains(mixed $value, mixed $subString, string $message = ''): void
    {
        null === $value || static::contains($value, $subString, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allContains(iterable $value, mixed $subString, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::contains($entry, $subString, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrContains(?iterable $value, mixed $subString, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::contains($entry, $subString, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotContains(mixed $value, mixed $subString, string $message = ''): void
    {
        null === $value || static::notContains($value, $subString, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNotContains(iterable $value, mixed $subString, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notContains($entry, $subString, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotContains(?iterable $value, mixed $subString, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notContains($entry, $subString, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotWhitespaceOnly(mixed $value, string $message = ''): void
    {
        null === $value || static::notWhitespaceOnly($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNotWhitespaceOnly(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notWhitespaceOnly($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotWhitespaceOnly(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notWhitespaceOnly($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrStartsWith(mixed $value, mixed $prefix, string $message = ''): void
    {
        null === $value || static::startsWith($value, $prefix, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allStartsWith(iterable $value, mixed $prefix, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::startsWith($entry, $prefix, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrStartsWith(?iterable $value, mixed $prefix, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::startsWith($entry, $prefix, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotStartsWith(mixed $value, mixed $prefix, string $message = ''): void
    {
        null === $value || static::notStartsWith($value, $prefix, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNotStartsWith(iterable $value, mixed $prefix, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notStartsWith($entry, $prefix, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotStartsWith(?iterable $value, mixed $prefix, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notStartsWith($entry, $prefix, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrStartsWithLetter(mixed $value, string $message = ''): void
    {
        null === $value || static::startsWithLetter($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allStartsWithLetter(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::startsWithLetter($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrStartsWithLetter(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::startsWithLetter($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrEndsWith(mixed $value, mixed $suffix, string $message = ''): void
    {
        null === $value || static::endsWith($value, $suffix, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allEndsWith(iterable $value, mixed $suffix, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::endsWith($entry, $suffix, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrEndsWith(?iterable $value, mixed $suffix, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::endsWith($entry, $suffix, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotEndsWith(mixed $value, mixed $suffix, string $message = ''): void
    {
        null === $value || static::notEndsWith($value, $suffix, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNotEndsWith(iterable $value, mixed $suffix, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notEndsWith($entry, $suffix, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotEndsWith(?iterable $value, mixed $suffix, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notEndsWith($entry, $suffix, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrRegex(mixed $value, mixed $pattern, string $message = ''): void
    {
        null === $value || static::regex($value, $pattern, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allRegex(iterable $value, mixed $pattern, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::regex($entry, $pattern, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrRegex(?iterable $value, mixed $pattern, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::regex($entry, $pattern, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotRegex(mixed $value, mixed $pattern, string $message = ''): void
    {
        null === $value || static::notRegex($value, $pattern, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNotRegex(iterable $value, mixed $pattern, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notRegex($entry, $pattern, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotRegex(?iterable $value, mixed $pattern, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notRegex($entry, $pattern, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrUnicodeLetters(mixed $value, string $message = ''): void
    {
        null === $value || static::unicodeLetters($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allUnicodeLetters(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::unicodeLetters($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrUnicodeLetters(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::unicodeLetters($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrAlpha(mixed $value, string $message = ''): void
    {
        null === $value || static::alpha($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allAlpha(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::alpha($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrAlpha(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::alpha($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrDigits(mixed $value, string $message = ''): void
    {
        null === $value || static::digits($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allDigits(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::digits($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrDigits(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::digits($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrAlnum(mixed $value, string $message = ''): void
    {
        null === $value || static::alnum($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allAlnum(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::alnum($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrAlnum(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::alnum($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert lowercase-string|null $value
     * @throws InvalidArgumentException
     */
    public static function nullOrLower(mixed $value, string $message = ''): void
    {
        null === $value || static::lower($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<lowercase-string> $value
     * @throws InvalidArgumentException
     */
    public static function allLower(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::lower($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<lowercase-string|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrLower(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::lower($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrUpper(mixed $value, string $message = ''): void
    {
        null === $value || static::upper($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allUpper(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::upper($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<!lowercase-string|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrUpper(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::upper($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrLength(mixed $value, mixed $length, string $message = ''): void
    {
        null === $value || static::length($value, $length, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allLength(iterable $value, mixed $length, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::length($entry, $length, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrLength(?iterable $value, mixed $length, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::length($entry, $length, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrMinLength(mixed $value, mixed $min, string $message = ''): void
    {
        null === $value || static::minLength($value, $min, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allMinLength(iterable $value, mixed $min, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::minLength($entry, $min, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrMinLength(?iterable $value, mixed $min, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::minLength($entry, $min, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrMaxLength(mixed $value, mixed $max, string $message = ''): void
    {
        null === $value || static::maxLength($value, $max, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allMaxLength(iterable $value, mixed $max, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::maxLength($entry, $max, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrMaxLength(?iterable $value, mixed $max, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::maxLength($entry, $max, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrLengthBetween(mixed $value, mixed $min, mixed $max, string $message = ''): void
    {
        null === $value || static::lengthBetween($value, $min, $max, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allLengthBetween(iterable $value, mixed $min, mixed $max, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::lengthBetween($entry, $min, $max, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrLengthBetween(?iterable $value, mixed $min, mixed $max, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::lengthBetween($entry, $min, $max, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function nullOrFileExists(mixed $value, string $message = ''): void
    {
        null === $value || static::fileExists($value, $message);
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allFileExists(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::fileExists($entry, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allNullOrFileExists(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::fileExists($entry, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function nullOrFile(mixed $value, string $message = ''): void
    {
        null === $value || static::file($value, $message);
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allFile(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::file($entry, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allNullOrFile(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::file($entry, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function nullOrDirectory(mixed $value, string $message = ''): void
    {
        null === $value || static::directory($value, $message);
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allDirectory(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::directory($entry, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allNullOrDirectory(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::directory($entry, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function nullOrReadable(mixed $value, string $message = ''): void
    {
        null === $value || static::readable($value, $message);
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allReadable(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::readable($entry, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allNullOrReadable(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::readable($entry, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function nullOrWritable(mixed $value, string $message = ''): void
    {
        null === $value || static::writable($value, $message);
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allWritable(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::writable($entry, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allNullOrWritable(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::writable($entry, $message);
        }
    }

    /**
     * @psalm-assert class-string|null $value
     * @throws InvalidArgumentException
     */
    public static function nullOrClassExists(mixed $value, string $message = ''): void
    {
        null === $value || static::classExists($value, $message);
    }

    /**
     * @psalm-assert iterable<class-string> $value
     * @throws InvalidArgumentException
     */
    public static function allClassExists(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::classExists($entry, $message);
        }
    }

    /**
     * @psalm-assert iterable<class-string|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrClassExists(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::classExists($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-template ExpectedType of object
     * @psalm-assert class-string<ExpectedType>|ExpectedType|null $value
     *
     * @param string|object $class
     *
     * @psalm-param class-string<ExpectedType> $class
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrSubclassOf(mixed $value, mixed $class, string $message = ''): void
    {
        null === $value || static::subclassOf($value, $class, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-template ExpectedType of object
     * @psalm-assert iterable<class-string<ExpectedType>|ExpectedType> $value
     *
     * @param string|object $class
     *
     * @psalm-param class-string<ExpectedType> $class
     *
     * @throws InvalidArgumentException
     */
    public static function allSubclassOf(iterable $value, mixed $class, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::subclassOf($entry, $class, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-template ExpectedType of object
     * @psalm-assert iterable<class-string<ExpectedType>|ExpectedType|null> $value
     *
     * @param string|object $class
     *
     * @psalm-param class-string<ExpectedType> $class
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrSubclassOf(?iterable $value, mixed $class, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::subclassOf($entry, $class, $message);
        }
    }

    /**
     * @psalm-assert class-string|null $value
     * @throws InvalidArgumentException
     */
    public static function nullOrInterfaceExists(mixed $value, string $message = ''): void
    {
        null === $value || static::interfaceExists($value, $message);
    }

    /**
     * @psalm-assert iterable<class-string> $value
     * @throws InvalidArgumentException
     */
    public static function allInterfaceExists(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::interfaceExists($entry, $message);
        }
    }

    /**
     * @psalm-assert iterable<class-string|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrInterfaceExists(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::interfaceExists($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-template ExpectedType of object
     * @psalm-assert class-string<ExpectedType>|ExpectedType|null $value
     * @psalm-param class-string<ExpectedType> $interface
     * @throws InvalidArgumentException
     */
    public static function nullOrImplementsInterface(mixed $value, mixed $interface, string $message = ''): void
    {
        null === $value || static::implementsInterface($value, $interface, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-template ExpectedType of object
     * @psalm-assert iterable<class-string<ExpectedType>|ExpectedType> $value
     * @psalm-param class-string<ExpectedType> $interface
     * @throws InvalidArgumentException
     */
    public static function allImplementsInterface(iterable $value, mixed $interface, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::implementsInterface($entry, $interface, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-template ExpectedType of object
     * @psalm-assert iterable<class-string<ExpectedType>|ExpectedType|null> $value
     * @psalm-param class-string<ExpectedType> $interface
     * @throws InvalidArgumentException
     */
    public static function allNullOrImplementsInterface(?iterable $value, mixed $interface, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::implementsInterface($entry, $interface, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @param string|object|null $classOrObject
     *
     * @psalm-param class-string|object|null $classOrObject
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrPropertyExists(mixed $classOrObject, mixed $property, string $message = ''): void
    {
        null === $classOrObject || static::propertyExists($classOrObject, $property, $message);
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string|object> $classOrObject
     *
     * @psalm-param iterable<class-string|object> $classOrObject
     *
     * @throws InvalidArgumentException
     */
    public static function allPropertyExists(mixed $classOrObject, mixed $property, string $message = ''): void
    {
        static::isIterable($classOrObject);

        foreach ($classOrObject as $entry) {
            static::propertyExists($entry, $property, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string|object|null> $classOrObject
     *
     * @psalm-param iterable<class-string|object|null> $classOrObject
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrPropertyExists(mixed $classOrObject, mixed $property, string $message = ''): void
    {
        static::isIterable($classOrObject);

        foreach ($classOrObject as $entry) {
            null === $entry || static::propertyExists($entry, $property, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @param string|object|null $classOrObject
     *
     * @psalm-param class-string|object|null $classOrObject
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrPropertyNotExists(mixed $classOrObject, mixed $property, string $message = ''): void
    {
        null === $classOrObject || static::propertyNotExists($classOrObject, $property, $message);
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string|object> $classOrObject
     *
     * @psalm-param iterable<class-string|object> $classOrObject
     *
     * @throws InvalidArgumentException
     */
    public static function allPropertyNotExists(mixed $classOrObject, mixed $property, string $message = ''): void
    {
        static::isIterable($classOrObject);

        foreach ($classOrObject as $entry) {
            static::propertyNotExists($entry, $property, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string|object|null> $classOrObject
     *
     * @psalm-param iterable<class-string|object|null> $classOrObject
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrPropertyNotExists(mixed $classOrObject, mixed $property, string $message = ''): void
    {
        static::isIterable($classOrObject);

        foreach ($classOrObject as $entry) {
            null === $entry || static::propertyNotExists($entry, $property, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @param string|object|null $classOrObject
     *
     * @psalm-param class-string|object|null $classOrObject
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrMethodExists(mixed $classOrObject, mixed $method, string $message = ''): void
    {
        null === $classOrObject || static::methodExists($classOrObject, $method, $message);
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string|object> $classOrObject
     *
     * @psalm-param iterable<class-string|object> $classOrObject
     *
     * @throws InvalidArgumentException
     */
    public static function allMethodExists(mixed $classOrObject, mixed $method, string $message = ''): void
    {
        static::isIterable($classOrObject);

        foreach ($classOrObject as $entry) {
            static::methodExists($entry, $method, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string|object|null> $classOrObject
     *
     * @psalm-param iterable<class-string|object|null> $classOrObject
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrMethodExists(mixed $classOrObject, mixed $method, string $message = ''): void
    {
        static::isIterable($classOrObject);

        foreach ($classOrObject as $entry) {
            null === $entry || static::methodExists($entry, $method, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @param string|object|null $classOrObject
     *
     * @psalm-param class-string|object|null $classOrObject
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrMethodNotExists(mixed $classOrObject, mixed $method, string $message = ''): void
    {
        null === $classOrObject || static::methodNotExists($classOrObject, $method, $message);
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string|object> $classOrObject
     *
     * @psalm-param iterable<class-string|object> $classOrObject
     *
     * @throws InvalidArgumentException
     */
    public static function allMethodNotExists(mixed $classOrObject, mixed $method, string $message = ''): void
    {
        static::isIterable($classOrObject);

        foreach ($classOrObject as $entry) {
            static::methodNotExists($entry, $method, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string|object|null> $classOrObject
     *
     * @psalm-param iterable<class-string|object|null> $classOrObject
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrMethodNotExists(mixed $classOrObject, mixed $method, string $message = ''): void
    {
        static::isIterable($classOrObject);

        foreach ($classOrObject as $entry) {
            null === $entry || static::methodNotExists($entry, $method, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @param string|int $key
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrKeyExists(mixed $array, string|int $key, string $message = ''): void
    {
        null === $array || static::keyExists($array, $key, $message);
    }

    /**
     * @psalm-pure
     *
     * @param string|int $key
     *
     * @throws InvalidArgumentException
     */
    public static function allKeyExists(mixed $array, string|int $key, string $message = ''): void
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::keyExists($entry, $key, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @param string|int $key
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrKeyExists(mixed $array, string|int $key, string $message = ''): void
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::keyExists($entry, $key, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @param string|int $key
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrKeyNotExists(mixed $array, string|int $key, string $message = ''): void
    {
        null === $array || static::keyNotExists($array, $key, $message);
    }

    /**
     * @psalm-pure
     *
     * @param string|int $key
     *
     * @throws InvalidArgumentException
     */
    public static function allKeyNotExists(mixed $array, string|int $key, string $message = ''): void
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::keyNotExists($entry, $key, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @param string|int $key
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrKeyNotExists(mixed $array, string|int $key, string $message = ''): void
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::keyNotExists($entry, $key, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert array-key|null $value
     * @throws InvalidArgumentException
     */
    public static function nullOrValidArrayKey(mixed $value, string $message = ''): void
    {
        null === $value || static::validArrayKey($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<array-key> $value
     * @throws InvalidArgumentException
     */
    public static function allValidArrayKey(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::validArrayKey($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<array-key|null> $value
     * @throws InvalidArgumentException
     */
    public static function allNullOrValidArrayKey(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::validArrayKey($entry, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function nullOrCount(mixed $array, mixed $number, string $message = ''): void
    {
        null === $array || static::count($array, $number, $message);
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allCount(mixed $array, mixed $number, string $message = ''): void
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::count($entry, $number, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allNullOrCount(mixed $array, mixed $number, string $message = ''): void
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::count($entry, $number, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function nullOrMinCount(mixed $array, mixed $min, string $message = ''): void
    {
        null === $array || static::minCount($array, $min, $message);
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allMinCount(mixed $array, mixed $min, string $message = ''): void
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::minCount($entry, $min, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allNullOrMinCount(mixed $array, mixed $min, string $message = ''): void
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::minCount($entry, $min, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function nullOrMaxCount(mixed $array, mixed $max, string $message = ''): void
    {
        null === $array || static::maxCount($array, $max, $message);
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allMaxCount(mixed $array, mixed $max, string $message = ''): void
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::maxCount($entry, $max, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allNullOrMaxCount(mixed $array, mixed $max, string $message = ''): void
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::maxCount($entry, $max, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function nullOrCountBetween(mixed $array, mixed $min, mixed $max, string $message = ''): void
    {
        null === $array || static::countBetween($array, $min, $max, $message);
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allCountBetween(mixed $array, mixed $min, mixed $max, string $message = ''): void
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::countBetween($entry, $min, $max, $message);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function allNullOrCountBetween(mixed $array, mixed $min, mixed $max, string $message = ''): void
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::countBetween($entry, $min, $max, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert list|null $array
     * @throws InvalidArgumentException
     */
    public static function nullOrIsList(mixed $array, string $message = ''): void
    {
        null === $array || static::isList($array, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<list> $array
     * @throws InvalidArgumentException
     */
    public static function allIsList(mixed $array, string $message = ''): void
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::isList($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<list|null> $array
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsList(mixed $array, string $message = ''): void
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::isList($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert non-empty-list|null $array
     * @throws InvalidArgumentException
     */
    public static function nullOrIsNonEmptyList(mixed $array, string $message = ''): void
    {
        null === $array || static::isNonEmptyList($array, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<non-empty-list> $array
     * @throws InvalidArgumentException
     */
    public static function allIsNonEmptyList(mixed $array, string $message = ''): void
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::isNonEmptyList($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<non-empty-list|null> $array
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsNonEmptyList(mixed $array, string $message = ''): void
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::isNonEmptyList($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-template T
     * @psalm-assert array<string, T>|null $array
     * @throws InvalidArgumentException
     */
    public static function nullOrIsMap(mixed $array, string $message = ''): void
    {
        null === $array || static::isMap($array, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-template T
     * @psalm-assert iterable<array<string, T>> $array
     * @throws InvalidArgumentException
     */
    public static function allIsMap(mixed $array, string $message = ''): void
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::isMap($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-template T
     * @psalm-assert iterable<array<string, T>|null> $array
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsMap(mixed $array, string $message = ''): void
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::isMap($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-template T
     * @psalm-param mixed|array<T>|null $array
     * @throws InvalidArgumentException
     */
    public static function nullOrIsNonEmptyMap(mixed $array, string $message = ''): void
    {
        null === $array || static::isNonEmptyMap($array, $message);
    }

    /**
     * @psalm-pure
     *
     * @psalm-template T
     * @psalm-param iterable<mixed|array<T>> $array
     * @throws InvalidArgumentException
     */
    public static function allIsNonEmptyMap(mixed $array, string $message = ''): void
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::isNonEmptyMap($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @psalm-template T
     * @psalm-assert iterable<array<string, T>|null> $array
     * @psalm-assert iterable<!empty|null> $array
     * @psalm-param iterable<mixed|array<T>|null> $array
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsNonEmptyMap(mixed $array, string $message = ''): void
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::isNonEmptyMap($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrUuid(mixed $value, string $message = ''): void
    {
        null === $value || static::uuid($value, $message);
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allUuid(iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::uuid($entry, $message);
        }
    }

    /**
     * @psalm-pure
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrUuid(?iterable $value, string $message = ''): void
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::uuid($entry, $message);
        }
    }

    /**
     * @psalm-param class-string<Throwable> $class
     * @throws InvalidArgumentException
     */
    public static function nullOrThrows(mixed $expression, string $class = 'Exception', string $message = ''): void
    {
        null === $expression || static::throws($expression, $class, $message);
    }

    /**
     * @psalm-param class-string<Throwable> $class
     * @throws InvalidArgumentException
     */
    public static function allThrows(mixed $expression, string $class = 'Exception', string $message = ''): void
    {
        static::isIterable($expression);

        foreach ($expression as $entry) {
            static::throws($entry, $class, $message);
        }
    }

    /**
     * @psalm-param class-string<Throwable> $class
     * @throws InvalidArgumentException
     */
    public static function allNullOrThrows(mixed $expression, string $class = 'Exception', string $message = ''): void
    {
        static::isIterable($expression);

        foreach ($expression as $entry) {
            null === $entry || static::throws($entry, $class, $message);
        }
    }
}
