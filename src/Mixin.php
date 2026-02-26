<?php

declare(strict_types=1);

namespace Webmozart\Assert;

use ArrayAccess;
use Countable;
use Throwable;

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
     *
     * @return string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrString(mixed $value, string $message = ''): mixed
    {
        null === $value || static::string($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<string> $value
     *
     * @return iterable<string>
     *
     * @throws InvalidArgumentException
     */
    public static function allString(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::string($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<string|null> $value
     *
     * @return iterable<string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrString(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::string($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert non-empty-string|null $value
     *
     * @return non-empty-string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrStringNotEmpty(mixed $value, string $message = ''): mixed
    {
        null === $value || static::stringNotEmpty($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<non-empty-string> $value
     *
     * @return iterable<non-empty-string>
     *
     * @throws InvalidArgumentException
     */
    public static function allStringNotEmpty(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::stringNotEmpty($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<non-empty-string|null> $value
     *
     * @return iterable<non-empty-string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrStringNotEmpty(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::stringNotEmpty($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert int|null $value
     *
     * @return int|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrInteger(mixed $value, string $message = ''): mixed
    {
        null === $value || static::integer($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<int> $value
     *
     * @return iterable<int>
     *
     * @throws InvalidArgumentException
     */
    public static function allInteger(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::integer($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<int|null> $value
     *
     * @return iterable<int|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrInteger(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::integer($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert numeric|null $value
     *
     * @return numeric|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIntegerish(mixed $value, string $message = ''): mixed
    {
        null === $value || static::integerish($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<numeric> $value
     *
     * @return iterable<numeric>
     *
     * @throws InvalidArgumentException
     */
    public static function allIntegerish(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::integerish($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<numeric|null> $value
     *
     * @return iterable<numeric|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIntegerish(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::integerish($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert positive-int|null $value
     *
     * @return positive-int|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrPositiveInteger(mixed $value, string $message = ''): mixed
    {
        null === $value || static::positiveInteger($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<positive-int> $value
     *
     * @return iterable<positive-int>
     *
     * @throws InvalidArgumentException
     */
    public static function allPositiveInteger(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::positiveInteger($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<positive-int|null> $value
     *
     * @return iterable<positive-int|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrPositiveInteger(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::positiveInteger($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert non-negative-int|null $value
     *
     * @return non-negative-int|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotNegativeInteger(mixed $value, string $message = ''): mixed
    {
        null === $value || static::notNegativeInteger($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<non-negative-int> $value
     *
     * @return iterable<non-negative-int>
     *
     * @throws InvalidArgumentException
     */
    public static function allNotNegativeInteger(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notNegativeInteger($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<non-negative-int|null> $value
     *
     * @return iterable<non-negative-int|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotNegativeInteger(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notNegativeInteger($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert negative-int|null $value
     *
     * @return negative-int|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNegativeInteger(mixed $value, string $message = ''): mixed
    {
        null === $value || static::negativeInteger($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<negative-int> $value
     *
     * @return iterable<negative-int>
     *
     * @throws InvalidArgumentException
     */
    public static function allNegativeInteger(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::negativeInteger($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<negative-int|null> $value
     *
     * @return iterable<negative-int|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNegativeInteger(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::negativeInteger($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert float|null $value
     *
     * @return float|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrFloat(mixed $value, string $message = ''): mixed
    {
        null === $value || static::float($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<float> $value
     *
     * @return iterable<float>
     *
     * @throws InvalidArgumentException
     */
    public static function allFloat(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::float($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<float|null> $value
     *
     * @return iterable<float|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrFloat(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::float($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert numeric|null $value
     *
     * @return numeric|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNumeric(mixed $value, string $message = ''): mixed
    {
        null === $value || static::numeric($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<numeric> $value
     *
     * @return iterable<numeric>
     *
     * @throws InvalidArgumentException
     */
    public static function allNumeric(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::numeric($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<numeric|null> $value
     *
     * @return iterable<numeric|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNumeric(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::numeric($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert positive-int|0|null $value
     *
     * @return positive-int|0|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNatural(mixed $value, string $message = ''): mixed
    {
        null === $value || static::natural($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<positive-int|0> $value
     *
     * @return iterable<positive-int|0>
     *
     * @throws InvalidArgumentException
     */
    public static function allNatural(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::natural($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<positive-int|0|null> $value
     *
     * @return iterable<positive-int|0|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNatural(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::natural($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert bool|null $value
     *
     * @return bool|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrBoolean(mixed $value, string $message = ''): mixed
    {
        null === $value || static::boolean($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<bool> $value
     *
     * @return iterable<bool>
     *
     * @throws InvalidArgumentException
     */
    public static function allBoolean(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::boolean($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<bool|null> $value
     *
     * @return iterable<bool|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrBoolean(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::boolean($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert scalar|null $value
     *
     * @return scalar|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrScalar(mixed $value, string $message = ''): mixed
    {
        null === $value || static::scalar($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<scalar> $value
     *
     * @return iterable<scalar>
     *
     * @throws InvalidArgumentException
     */
    public static function allScalar(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::scalar($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<scalar|null> $value
     *
     * @return iterable<scalar|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrScalar(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::scalar($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert object|null $value
     *
     * @return object|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrObject(mixed $value, string $message = ''): mixed
    {
        null === $value || static::object($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<object> $value
     *
     * @return iterable<object>
     *
     * @throws InvalidArgumentException
     */
    public static function allObject(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::object($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<object|null> $value
     *
     * @return iterable<object|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrObject(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::object($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert object|string|null $value
     *
     * @return object|string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrObjectish(mixed $value, string $message = ''): mixed
    {
        null === $value || static::objectish($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<object|string> $value
     *
     * @return iterable<object|string>
     *
     * @throws InvalidArgumentException
     */
    public static function allObjectish(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::objectish($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<object|string|null> $value
     *
     * @return iterable<object|string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrObjectish(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::objectish($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert resource|null $value
     *
     * @see https://www.php.net/manual/en/function.get-resource-type.php
     *
     * @return resource|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrResource(mixed $value, ?string $type = null, string $message = ''): mixed
    {
        null === $value || static::resource($value, $type, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<resource> $value
     *
     * @see https://www.php.net/manual/en/function.get-resource-type.php
     *
     * @return iterable<resource>
     *
     * @throws InvalidArgumentException
     */
    public static function allResource(mixed $value, ?string $type = null, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::resource($entry, $type, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<resource|null> $value
     *
     * @see https://www.php.net/manual/en/function.get-resource-type.php
     *
     * @return iterable<resource|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrResource(mixed $value, ?string $type = null, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::resource($entry, $type, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert callable|null $value
     *
     * @return callable|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsCallable(mixed $value, string $message = ''): mixed
    {
        null === $value || static::isCallable($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<callable> $value
     *
     * @return iterable<callable>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsCallable(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isCallable($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<callable|null> $value
     *
     * @return iterable<callable|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsCallable(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isCallable($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert array|null $value
     *
     * @return array|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsArray(mixed $value, string $message = ''): mixed
    {
        null === $value || static::isArray($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<array> $value
     *
     * @return iterable<array>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsArray(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isArray($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<array|null> $value
     *
     * @return iterable<array|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsArray(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isArray($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert array|ArrayAccess|null $value
     *
     * @return array|ArrayAccess|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsArrayAccessible(mixed $value, string $message = ''): mixed
    {
        null === $value || static::isArrayAccessible($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<array|ArrayAccess> $value
     *
     * @return iterable<array|ArrayAccess>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsArrayAccessible(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isArrayAccessible($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<array|ArrayAccess|null> $value
     *
     * @return iterable<array|ArrayAccess|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsArrayAccessible(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isArrayAccessible($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert countable|null $value
     *
     * @return countable|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsCountable(mixed $value, string $message = ''): mixed
    {
        null === $value || static::isCountable($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<countable> $value
     *
     * @return iterable<countable>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsCountable(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isCountable($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<countable|null> $value
     *
     * @return iterable<countable|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsCountable(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isCountable($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable|null $value
     *
     * @return iterable|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsIterable(mixed $value, string $message = ''): mixed
    {
        null === $value || static::isIterable($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<iterable> $value
     *
     * @return iterable<iterable>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsIterable(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isIterable($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<iterable|null> $value
     *
     * @return iterable<iterable|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsIterable(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isIterable($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @template T of object
     * @psalm-assert T|null $value
     *
     * @psalm-param class-string<T> $class
     * @return T|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsInstanceOf(mixed $value, mixed $class, string $message = ''): mixed
    {
        null === $value || static::isInstanceOf($value, $class, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @template T of object
     * @psalm-assert iterable<T> $value
     *
     * @psalm-param class-string<T> $class
     * @return iterable<T>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsInstanceOf(mixed $value, mixed $class, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isInstanceOf($entry, $class, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @template T of object
     * @psalm-assert iterable<T|null> $value
     *
     * @psalm-param class-string<T> $class
     * @return iterable<T|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsInstanceOf(mixed $value, mixed $class, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isInstanceOf($entry, $class, $message);
        }

        return $value;
    }

    /**
     * @template T of object
     * @psalm-param class-string<T> $class
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotInstanceOf(mixed $value, mixed $class, string $message = ''): mixed
    {
        null === $value || static::notInstanceOf($value, $class, $message);

        return $value;
    }

    /**
     * @template T of object
     * @psalm-param class-string<T> $class
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNotInstanceOf(mixed $value, mixed $class, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notInstanceOf($entry, $class, $message);
        }

        return $value;
    }

    /**
     * @template T of object
     * @psalm-assert iterable<object|null> $value
     *
     * @psalm-param class-string<T> $class
     * @return iterable<object|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotInstanceOf(mixed $value, mixed $class, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notInstanceOf($entry, $class, $message);
        }

        return $value;
    }

    /**
     * @template T of object
     * @psalm-assert T|null $value
     *
     * @param T|null $value
     *
     * @return T|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsInstanceOfAny(mixed $value, mixed $classes, string $message = ''): mixed
    {
        null === $value || static::isInstanceOfAny($value, $classes, $message);

        return $value;
    }

    /**
     * @template T of object
     * @psalm-assert iterable<T> $value
     *
     * @param iterable<T> $value
     *
     * @return iterable<T>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsInstanceOfAny(mixed $value, mixed $classes, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isInstanceOfAny($entry, $classes, $message);
        }

        return $value;
    }

    /**
     * @template T of object
     * @psalm-assert iterable<T|null> $value
     *
     * @param iterable<T|null> $value
     *
     * @return iterable<T|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsInstanceOfAny(mixed $value, mixed $classes, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isInstanceOfAny($entry, $classes, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @template T of object
     * @psalm-assert T|class-string<T>|null $value
     *
     * @return T|class-string<T>|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsAOf(mixed $value, mixed $class, string $message = ''): mixed
    {
        null === $value || static::isAOf($value, $class, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @template T of object
     * @psalm-assert iterable<T|class-string<T>> $value
     *
     * @return iterable<T|class-string<T>>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsAOf(mixed $value, mixed $class, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isAOf($entry, $class, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @template T of object
     * @psalm-assert iterable<T|class-string<T>|null> $value
     *
     * @return iterable<T|class-string<T>|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsAOf(mixed $value, mixed $class, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isAOf($entry, $class, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @template T
     *
     * @param T|null $value
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsNotA(mixed $value, mixed $class, string $message = ''): mixed
    {
        null === $value || static::isNotA($value, $class, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @template T
     *
     * @param iterable<T> $value
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allIsNotA(mixed $value, mixed $class, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isNotA($entry, $class, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @template T
     * @psalm-assert iterable<object|class-string|null> $value
     *
     * @param iterable<T|null> $value
     *
     * @return iterable<object|class-string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsNotA(mixed $value, mixed $class, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isNotA($entry, $class, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param object|string|null $value
     * @param string[]           $classes
     *
     * @psalm-param array<class-string> $classes
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsAnyOf(mixed $value, mixed $classes, string $message = ''): mixed
    {
        null === $value || static::isAnyOf($value, $classes, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param iterable<object|string> $value
     * @param string[]                $classes
     *
     * @psalm-param array<class-string> $classes
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allIsAnyOf(mixed $value, mixed $classes, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isAnyOf($entry, $classes, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param iterable<object|string|null> $value
     * @param string[]                     $classes
     *
     * @psalm-param array<class-string> $classes
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsAnyOf(mixed $value, mixed $classes, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isAnyOf($entry, $classes, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert empty $value
     *
     * @return empty
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsEmpty(mixed $value, string $message = ''): mixed
    {
        null === $value || static::isEmpty($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<empty> $value
     *
     * @return iterable<empty>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsEmpty(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::isEmpty($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<empty|null> $value
     *
     * @return iterable<empty|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsEmpty(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::isEmpty($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotEmpty(mixed $value, string $message = ''): mixed
    {
        null === $value || static::notEmpty($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNotEmpty(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notEmpty($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<!empty|null> $value
     *
     * @return iterable<!empty|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotEmpty(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notEmpty($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<null> $value
     *
     * @return iterable<null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNull(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::null($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNotNull(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notNull($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert true|null $value
     *
     * @return true|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrTrue(mixed $value, string $message = ''): mixed
    {
        null === $value || static::true($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<true> $value
     *
     * @return iterable<true>
     *
     * @throws InvalidArgumentException
     */
    public static function allTrue(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::true($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<true|null> $value
     *
     * @return iterable<true|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrTrue(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::true($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert false|null $value
     *
     * @return false|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrFalse(mixed $value, string $message = ''): mixed
    {
        null === $value || static::false($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<false> $value
     *
     * @return iterable<false>
     *
     * @throws InvalidArgumentException
     */
    public static function allFalse(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::false($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<false|null> $value
     *
     * @return iterable<false|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrFalse(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::false($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotFalse(mixed $value, string $message = ''): mixed
    {
        null === $value || static::notFalse($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNotFalse(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notFalse($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<!false|null> $value
     *
     * @return iterable<!false|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotFalse(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notFalse($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-param string|null $value
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIp(mixed $value, string $message = ''): mixed
    {
        null === $value || static::ip($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-param iterable<string> $value
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allIp(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::ip($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-param iterable<string|null> $value
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIp(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::ip($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-param string|null $value
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIpv4(mixed $value, string $message = ''): mixed
    {
        null === $value || static::ipv4($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-param iterable<string> $value
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allIpv4(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::ipv4($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-param iterable<string|null> $value
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIpv4(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::ipv4($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-param string|null $value
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIpv6(mixed $value, string $message = ''): mixed
    {
        null === $value || static::ipv6($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-param iterable<string> $value
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allIpv6(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::ipv6($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-param iterable<string|null> $value
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIpv6(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::ipv6($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-param string|null $value
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrEmail(mixed $value, string $message = ''): mixed
    {
        null === $value || static::email($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-param iterable<string> $value
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allEmail(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::email($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-param iterable<string|null> $value
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrEmail(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::email($entry, $message);
        }

        return $value;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrUniqueValues(mixed $values, string $message = ''): mixed
    {
        null === $values || static::uniqueValues($values, $message);

        return $values;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allUniqueValues(mixed $values, string $message = ''): mixed
    {
        static::isIterable($values);

        foreach ($values as $entry) {
            static::uniqueValues($entry, $message);
        }

        return $values;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrUniqueValues(mixed $values, string $message = ''): mixed
    {
        static::isIterable($values);

        foreach ($values as $entry) {
            null === $entry || static::uniqueValues($entry, $message);
        }

        return $values;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrEq(mixed $value, mixed $expect, string $message = ''): mixed
    {
        null === $value || static::eq($value, $expect, $message);

        return $value;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allEq(mixed $value, mixed $expect, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::eq($entry, $expect, $message);
        }

        return $value;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrEq(mixed $value, mixed $expect, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::eq($entry, $expect, $message);
        }

        return $value;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotEq(mixed $value, mixed $expect, string $message = ''): mixed
    {
        null === $value || static::notEq($value, $expect, $message);

        return $value;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNotEq(mixed $value, mixed $expect, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notEq($entry, $expect, $message);
        }

        return $value;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotEq(mixed $value, mixed $expect, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notEq($entry, $expect, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrSame(mixed $value, mixed $expect, string $message = ''): mixed
    {
        null === $value || static::same($value, $expect, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allSame(mixed $value, mixed $expect, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::same($entry, $expect, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrSame(mixed $value, mixed $expect, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::same($entry, $expect, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotSame(mixed $value, mixed $expect, string $message = ''): mixed
    {
        null === $value || static::notSame($value, $expect, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNotSame(mixed $value, mixed $expect, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notSame($entry, $expect, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotSame(mixed $value, mixed $expect, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notSame($entry, $expect, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrGreaterThan(mixed $value, mixed $limit, string $message = ''): mixed
    {
        null === $value || static::greaterThan($value, $limit, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allGreaterThan(mixed $value, mixed $limit, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::greaterThan($entry, $limit, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrGreaterThan(mixed $value, mixed $limit, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::greaterThan($entry, $limit, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrGreaterThanEq(mixed $value, mixed $limit, string $message = ''): mixed
    {
        null === $value || static::greaterThanEq($value, $limit, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allGreaterThanEq(mixed $value, mixed $limit, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::greaterThanEq($entry, $limit, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrGreaterThanEq(mixed $value, mixed $limit, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::greaterThanEq($entry, $limit, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrLessThan(mixed $value, mixed $limit, string $message = ''): mixed
    {
        null === $value || static::lessThan($value, $limit, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allLessThan(mixed $value, mixed $limit, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::lessThan($entry, $limit, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrLessThan(mixed $value, mixed $limit, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::lessThan($entry, $limit, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrLessThanEq(mixed $value, mixed $limit, string $message = ''): mixed
    {
        null === $value || static::lessThanEq($value, $limit, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allLessThanEq(mixed $value, mixed $limit, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::lessThanEq($entry, $limit, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrLessThanEq(mixed $value, mixed $limit, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::lessThanEq($entry, $limit, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrRange(mixed $value, mixed $min, mixed $max, string $message = ''): mixed
    {
        null === $value || static::range($value, $min, $max, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allRange(mixed $value, mixed $min, mixed $max, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::range($entry, $min, $max, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrRange(mixed $value, mixed $min, mixed $max, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::range($entry, $min, $max, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrOneOf(mixed $value, mixed $values, string $message = ''): mixed
    {
        null === $value || static::oneOf($value, $values, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allOneOf(mixed $value, mixed $values, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::oneOf($entry, $values, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrOneOf(mixed $value, mixed $values, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::oneOf($entry, $values, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrInArray(mixed $value, mixed $values, string $message = ''): mixed
    {
        null === $value || static::inArray($value, $values, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allInArray(mixed $value, mixed $values, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::inArray($entry, $values, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrInArray(mixed $value, mixed $values, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::inArray($entry, $values, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotOneOf(mixed $value, mixed $values, string $message = ''): mixed
    {
        null === $value || static::notOneOf($value, $values, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNotOneOf(mixed $value, mixed $values, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notOneOf($entry, $values, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotOneOf(mixed $value, mixed $values, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notOneOf($entry, $values, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotInArray(mixed $value, mixed $values, string $message = ''): mixed
    {
        null === $value || static::notInArray($value, $values, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNotInArray(mixed $value, mixed $values, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notInArray($entry, $values, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotInArray(mixed $value, mixed $values, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notInArray($entry, $values, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrContains(mixed $value, mixed $subString, string $message = ''): mixed
    {
        null === $value || static::contains($value, $subString, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allContains(mixed $value, mixed $subString, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::contains($entry, $subString, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrContains(mixed $value, mixed $subString, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::contains($entry, $subString, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotContains(mixed $value, mixed $subString, string $message = ''): mixed
    {
        null === $value || static::notContains($value, $subString, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNotContains(mixed $value, mixed $subString, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notContains($entry, $subString, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotContains(mixed $value, mixed $subString, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notContains($entry, $subString, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotWhitespaceOnly(mixed $value, string $message = ''): mixed
    {
        null === $value || static::notWhitespaceOnly($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNotWhitespaceOnly(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notWhitespaceOnly($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotWhitespaceOnly(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notWhitespaceOnly($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrStartsWith(mixed $value, mixed $prefix, string $message = ''): mixed
    {
        null === $value || static::startsWith($value, $prefix, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allStartsWith(mixed $value, mixed $prefix, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::startsWith($entry, $prefix, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrStartsWith(mixed $value, mixed $prefix, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::startsWith($entry, $prefix, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotStartsWith(mixed $value, mixed $prefix, string $message = ''): mixed
    {
        null === $value || static::notStartsWith($value, $prefix, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNotStartsWith(mixed $value, mixed $prefix, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notStartsWith($entry, $prefix, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotStartsWith(mixed $value, mixed $prefix, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notStartsWith($entry, $prefix, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrStartsWithLetter(mixed $value, string $message = ''): mixed
    {
        null === $value || static::startsWithLetter($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allStartsWithLetter(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::startsWithLetter($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrStartsWithLetter(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::startsWithLetter($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrEndsWith(mixed $value, mixed $suffix, string $message = ''): mixed
    {
        null === $value || static::endsWith($value, $suffix, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allEndsWith(mixed $value, mixed $suffix, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::endsWith($entry, $suffix, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrEndsWith(mixed $value, mixed $suffix, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::endsWith($entry, $suffix, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotEndsWith(mixed $value, mixed $suffix, string $message = ''): mixed
    {
        null === $value || static::notEndsWith($value, $suffix, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNotEndsWith(mixed $value, mixed $suffix, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notEndsWith($entry, $suffix, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotEndsWith(mixed $value, mixed $suffix, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notEndsWith($entry, $suffix, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrRegex(mixed $value, mixed $pattern, string $message = ''): mixed
    {
        null === $value || static::regex($value, $pattern, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allRegex(mixed $value, mixed $pattern, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::regex($entry, $pattern, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrRegex(mixed $value, mixed $pattern, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::regex($entry, $pattern, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotRegex(mixed $value, mixed $pattern, string $message = ''): mixed
    {
        null === $value || static::notRegex($value, $pattern, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNotRegex(mixed $value, mixed $pattern, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::notRegex($entry, $pattern, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotRegex(mixed $value, mixed $pattern, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::notRegex($entry, $pattern, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrUnicodeLetters(mixed $value, string $message = ''): mixed
    {
        null === $value || static::unicodeLetters($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allUnicodeLetters(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::unicodeLetters($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrUnicodeLetters(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::unicodeLetters($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrAlpha(mixed $value, string $message = ''): mixed
    {
        null === $value || static::alpha($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allAlpha(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::alpha($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrAlpha(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::alpha($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrDigits(mixed $value, string $message = ''): mixed
    {
        null === $value || static::digits($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allDigits(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::digits($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrDigits(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::digits($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrAlnum(mixed $value, string $message = ''): mixed
    {
        null === $value || static::alnum($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allAlnum(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::alnum($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrAlnum(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::alnum($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert lowercase-string|null $value
     *
     * @return lowercase-string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrLower(mixed $value, string $message = ''): mixed
    {
        null === $value || static::lower($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<lowercase-string> $value
     *
     * @return iterable<lowercase-string>
     *
     * @throws InvalidArgumentException
     */
    public static function allLower(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::lower($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<lowercase-string|null> $value
     *
     * @return iterable<lowercase-string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrLower(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::lower($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrUpper(mixed $value, string $message = ''): mixed
    {
        null === $value || static::upper($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allUpper(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::upper($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<!lowercase-string|null> $value
     *
     * @return iterable<!lowercase-string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrUpper(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::upper($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrLength(mixed $value, mixed $length, string $message = ''): mixed
    {
        null === $value || static::length($value, $length, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allLength(mixed $value, mixed $length, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::length($entry, $length, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrLength(mixed $value, mixed $length, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::length($entry, $length, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrMinLength(mixed $value, mixed $min, string $message = ''): mixed
    {
        null === $value || static::minLength($value, $min, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allMinLength(mixed $value, mixed $min, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::minLength($entry, $min, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrMinLength(mixed $value, mixed $min, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::minLength($entry, $min, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrMaxLength(mixed $value, mixed $max, string $message = ''): mixed
    {
        null === $value || static::maxLength($value, $max, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allMaxLength(mixed $value, mixed $max, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::maxLength($entry, $max, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrMaxLength(mixed $value, mixed $max, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::maxLength($entry, $max, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrLengthBetween(mixed $value, mixed $min, mixed $max, string $message = ''): mixed
    {
        null === $value || static::lengthBetween($value, $min, $max, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allLengthBetween(mixed $value, mixed $min, mixed $max, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::lengthBetween($entry, $min, $max, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrLengthBetween(mixed $value, mixed $min, mixed $max, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::lengthBetween($entry, $min, $max, $message);
        }

        return $value;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrFileExists(mixed $value, string $message = ''): mixed
    {
        null === $value || static::fileExists($value, $message);

        return $value;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allFileExists(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::fileExists($entry, $message);
        }

        return $value;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrFileExists(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::fileExists($entry, $message);
        }

        return $value;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrFile(mixed $value, string $message = ''): mixed
    {
        null === $value || static::file($value, $message);

        return $value;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allFile(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::file($entry, $message);
        }

        return $value;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrFile(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::file($entry, $message);
        }

        return $value;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrDirectory(mixed $value, string $message = ''): mixed
    {
        null === $value || static::directory($value, $message);

        return $value;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allDirectory(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::directory($entry, $message);
        }

        return $value;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrDirectory(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::directory($entry, $message);
        }

        return $value;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrReadable(mixed $value, string $message = ''): mixed
    {
        null === $value || static::readable($value, $message);

        return $value;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allReadable(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::readable($entry, $message);
        }

        return $value;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrReadable(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::readable($entry, $message);
        }

        return $value;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrWritable(mixed $value, string $message = ''): mixed
    {
        null === $value || static::writable($value, $message);

        return $value;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allWritable(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::writable($entry, $message);
        }

        return $value;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrWritable(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::writable($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-assert class-string|null $value
     *
     * @return class-string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrClassExists(mixed $value, string $message = ''): mixed
    {
        null === $value || static::classExists($value, $message);

        return $value;
    }

    /**
     * @psalm-assert iterable<class-string> $value
     *
     * @return iterable<class-string>
     *
     * @throws InvalidArgumentException
     */
    public static function allClassExists(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::classExists($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-assert iterable<class-string|null> $value
     *
     * @return iterable<class-string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrClassExists(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::classExists($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @template ExpectedType of object
     * @psalm-assert class-string<ExpectedType>|null $value
     *
     * @param class-string<ExpectedType> $class
     *
     * @return class-string<ExpectedType>|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrSubclassOf(mixed $value, mixed $class, string $message = ''): mixed
    {
        null === $value || static::subclassOf($value, $class, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @template ExpectedType of object
     * @psalm-assert iterable<class-string<ExpectedType>> $value
     *
     * @param class-string<ExpectedType> $class
     *
     * @return iterable<class-string<ExpectedType>>
     *
     * @throws InvalidArgumentException
     */
    public static function allSubclassOf(mixed $value, mixed $class, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::subclassOf($entry, $class, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @template ExpectedType of object
     * @psalm-assert iterable<class-string<ExpectedType>|null> $value
     *
     * @param class-string<ExpectedType> $class
     *
     * @return iterable<class-string<ExpectedType>|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrSubclassOf(mixed $value, mixed $class, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::subclassOf($entry, $class, $message);
        }

        return $value;
    }

    /**
     * @psalm-assert class-string|null $value
     *
     * @return class-string|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrInterfaceExists(mixed $value, string $message = ''): mixed
    {
        null === $value || static::interfaceExists($value, $message);

        return $value;
    }

    /**
     * @psalm-assert iterable<class-string> $value
     *
     * @return iterable<class-string>
     *
     * @throws InvalidArgumentException
     */
    public static function allInterfaceExists(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::interfaceExists($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-assert iterable<class-string|null> $value
     *
     * @return iterable<class-string|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrInterfaceExists(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::interfaceExists($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @template ExpectedType of object
     * @psalm-assert class-string<ExpectedType>|ExpectedType|null $value
     *
     * @param class-string<ExpectedType>|ExpectedType|null $value
     * @param class-string<ExpectedType>                   $interface
     *
     * @return class-string<ExpectedType>|ExpectedType|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrImplementsInterface(mixed $value, mixed $interface, string $message = ''): mixed
    {
        null === $value || static::implementsInterface($value, $interface, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @template ExpectedType of object
     * @psalm-assert iterable<class-string<ExpectedType>|ExpectedType> $value
     *
     * @param iterable<class-string<ExpectedType>|ExpectedType> $value
     * @param class-string<ExpectedType>                        $interface
     *
     * @return iterable<class-string<ExpectedType>|ExpectedType>
     *
     * @throws InvalidArgumentException
     */
    public static function allImplementsInterface(mixed $value, mixed $interface, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::implementsInterface($entry, $interface, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @template ExpectedType of object
     * @psalm-assert iterable<class-string<ExpectedType>|ExpectedType|null> $value
     *
     * @param iterable<class-string<ExpectedType>|ExpectedType|null> $value
     * @param class-string<ExpectedType>                             $interface
     *
     * @return iterable<class-string<ExpectedType>|ExpectedType|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrImplementsInterface(mixed $value, mixed $interface, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::implementsInterface($entry, $interface, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @param string|object|null $classOrObject
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrPropertyExists(mixed $classOrObject, mixed $property, string $message = ''): mixed
    {
        null === $classOrObject || static::propertyExists($classOrObject, $property, $message);

        return $classOrObject;
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string|object> $classOrObject
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allPropertyExists(mixed $classOrObject, mixed $property, string $message = ''): mixed
    {
        static::isIterable($classOrObject);

        foreach ($classOrObject as $entry) {
            static::propertyExists($entry, $property, $message);
        }

        return $classOrObject;
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string|object|null> $classOrObject
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrPropertyExists(mixed $classOrObject, mixed $property, string $message = ''): mixed
    {
        static::isIterable($classOrObject);

        foreach ($classOrObject as $entry) {
            null === $entry || static::propertyExists($entry, $property, $message);
        }

        return $classOrObject;
    }

    /**
     * @psalm-pure
     *
     * @param string|object|null $classOrObject
     *
     * @psalm-param class-string|object|null $classOrObject
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrPropertyNotExists(mixed $classOrObject, mixed $property, string $message = ''): mixed
    {
        null === $classOrObject || static::propertyNotExists($classOrObject, $property, $message);

        return $classOrObject;
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string|object> $classOrObject
     *
     * @psalm-param iterable<class-string|object> $classOrObject
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allPropertyNotExists(mixed $classOrObject, mixed $property, string $message = ''): mixed
    {
        static::isIterable($classOrObject);

        foreach ($classOrObject as $entry) {
            static::propertyNotExists($entry, $property, $message);
        }

        return $classOrObject;
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string|object|null> $classOrObject
     *
     * @psalm-param iterable<class-string|object|null> $classOrObject
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrPropertyNotExists(mixed $classOrObject, mixed $property, string $message = ''): mixed
    {
        static::isIterable($classOrObject);

        foreach ($classOrObject as $entry) {
            null === $entry || static::propertyNotExists($entry, $property, $message);
        }

        return $classOrObject;
    }

    /**
     * @psalm-pure
     *
     * @param string|object|null $classOrObject
     *
     * @psalm-param class-string|object|null $classOrObject
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrMethodExists(mixed $classOrObject, mixed $method, string $message = ''): mixed
    {
        null === $classOrObject || static::methodExists($classOrObject, $method, $message);

        return $classOrObject;
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string|object> $classOrObject
     *
     * @psalm-param iterable<class-string|object> $classOrObject
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allMethodExists(mixed $classOrObject, mixed $method, string $message = ''): mixed
    {
        static::isIterable($classOrObject);

        foreach ($classOrObject as $entry) {
            static::methodExists($entry, $method, $message);
        }

        return $classOrObject;
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string|object|null> $classOrObject
     *
     * @psalm-param iterable<class-string|object|null> $classOrObject
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrMethodExists(mixed $classOrObject, mixed $method, string $message = ''): mixed
    {
        static::isIterable($classOrObject);

        foreach ($classOrObject as $entry) {
            null === $entry || static::methodExists($entry, $method, $message);
        }

        return $classOrObject;
    }

    /**
     * @psalm-pure
     *
     * @param string|object|null $classOrObject
     *
     * @psalm-param class-string|object|null $classOrObject
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrMethodNotExists(mixed $classOrObject, mixed $method, string $message = ''): mixed
    {
        null === $classOrObject || static::methodNotExists($classOrObject, $method, $message);

        return $classOrObject;
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string|object> $classOrObject
     *
     * @psalm-param iterable<class-string|object> $classOrObject
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allMethodNotExists(mixed $classOrObject, mixed $method, string $message = ''): mixed
    {
        static::isIterable($classOrObject);

        foreach ($classOrObject as $entry) {
            static::methodNotExists($entry, $method, $message);
        }

        return $classOrObject;
    }

    /**
     * @psalm-pure
     *
     * @param iterable<string|object|null> $classOrObject
     *
     * @psalm-param iterable<class-string|object|null> $classOrObject
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrMethodNotExists(mixed $classOrObject, mixed $method, string $message = ''): mixed
    {
        static::isIterable($classOrObject);

        foreach ($classOrObject as $entry) {
            null === $entry || static::methodNotExists($entry, $method, $message);
        }

        return $classOrObject;
    }

    /**
     * @psalm-pure
     *
     * @param string|int $key
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrKeyExists(mixed $array, string|int $key, string $message = ''): mixed
    {
        null === $array || static::keyExists($array, $key, $message);

        return $array;
    }

    /**
     * @psalm-pure
     *
     * @param string|int $key
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allKeyExists(mixed $array, string|int $key, string $message = ''): mixed
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::keyExists($entry, $key, $message);
        }

        return $array;
    }

    /**
     * @psalm-pure
     *
     * @param string|int $key
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrKeyExists(mixed $array, string|int $key, string $message = ''): mixed
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::keyExists($entry, $key, $message);
        }

        return $array;
    }

    /**
     * @psalm-pure
     *
     * @param string|int $key
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrKeyNotExists(mixed $array, string|int $key, string $message = ''): mixed
    {
        null === $array || static::keyNotExists($array, $key, $message);

        return $array;
    }

    /**
     * @psalm-pure
     *
     * @param string|int $key
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allKeyNotExists(mixed $array, string|int $key, string $message = ''): mixed
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::keyNotExists($entry, $key, $message);
        }

        return $array;
    }

    /**
     * @psalm-pure
     *
     * @param string|int $key
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrKeyNotExists(mixed $array, string|int $key, string $message = ''): mixed
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::keyNotExists($entry, $key, $message);
        }

        return $array;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert array-key|null $value
     *
     * @return array-key|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrValidArrayKey(mixed $value, string $message = ''): mixed
    {
        null === $value || static::validArrayKey($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<array-key> $value
     *
     * @return iterable<array-key>
     *
     * @throws InvalidArgumentException
     */
    public static function allValidArrayKey(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::validArrayKey($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<array-key|null> $value
     *
     * @return iterable<array-key|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrValidArrayKey(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::validArrayKey($entry, $message);
        }

        return $value;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrCount(mixed $array, mixed $number, string $message = ''): mixed
    {
        null === $array || static::count($array, $number, $message);

        return $array;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allCount(mixed $array, mixed $number, string $message = ''): mixed
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::count($entry, $number, $message);
        }

        return $array;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrCount(mixed $array, mixed $number, string $message = ''): mixed
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::count($entry, $number, $message);
        }

        return $array;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrMinCount(mixed $array, mixed $min, string $message = ''): mixed
    {
        null === $array || static::minCount($array, $min, $message);

        return $array;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allMinCount(mixed $array, mixed $min, string $message = ''): mixed
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::minCount($entry, $min, $message);
        }

        return $array;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrMinCount(mixed $array, mixed $min, string $message = ''): mixed
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::minCount($entry, $min, $message);
        }

        return $array;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrMaxCount(mixed $array, mixed $max, string $message = ''): mixed
    {
        null === $array || static::maxCount($array, $max, $message);

        return $array;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allMaxCount(mixed $array, mixed $max, string $message = ''): mixed
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::maxCount($entry, $max, $message);
        }

        return $array;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrMaxCount(mixed $array, mixed $max, string $message = ''): mixed
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::maxCount($entry, $max, $message);
        }

        return $array;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrCountBetween(mixed $array, mixed $min, mixed $max, string $message = ''): mixed
    {
        null === $array || static::countBetween($array, $min, $max, $message);

        return $array;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allCountBetween(mixed $array, mixed $min, mixed $max, string $message = ''): mixed
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::countBetween($entry, $min, $max, $message);
        }

        return $array;
    }

    /**
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrCountBetween(mixed $array, mixed $min, mixed $max, string $message = ''): mixed
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::countBetween($entry, $min, $max, $message);
        }

        return $array;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert list<mixed>|null $array
     *
     * @return list<mixed>|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsList(mixed $array, string $message = ''): mixed
    {
        null === $array || static::isList($array, $message);

        return $array;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<list<mixed>> $array
     *
     * @return iterable<list<mixed>>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsList(mixed $array, string $message = ''): mixed
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::isList($entry, $message);
        }

        return $array;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<list<mixed>|null> $array
     *
     * @return iterable<list<mixed>|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsList(mixed $array, string $message = ''): mixed
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::isList($entry, $message);
        }

        return $array;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert non-empty-list<mixed>|null $array
     *
     * @return non-empty-list<mixed>|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsNonEmptyList(mixed $array, string $message = ''): mixed
    {
        null === $array || static::isNonEmptyList($array, $message);

        return $array;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<non-empty-list<mixed>> $array
     *
     * @return iterable<non-empty-list<mixed>>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsNonEmptyList(mixed $array, string $message = ''): mixed
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::isNonEmptyList($entry, $message);
        }

        return $array;
    }

    /**
     * @psalm-pure
     *
     * @psalm-assert iterable<non-empty-list<mixed>|null> $array
     *
     * @return iterable<non-empty-list<mixed>|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsNonEmptyList(mixed $array, string $message = ''): mixed
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::isNonEmptyList($entry, $message);
        }

        return $array;
    }

    /**
     * @psalm-pure
     *
     * @template T
     * @psalm-assert array<string, T>|null $array
     *
     * @param mixed|array<array-key, T>|null $array
     *
     * @return array<string, T>|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsMap(mixed $array, string $message = ''): mixed
    {
        null === $array || static::isMap($array, $message);

        return $array;
    }

    /**
     * @psalm-pure
     *
     * @template T
     * @psalm-assert iterable<array<string, T>> $array
     *
     * @param iterable<mixed|array<array-key, T>> $array
     *
     * @return iterable<array<string, T>>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsMap(mixed $array, string $message = ''): mixed
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::isMap($entry, $message);
        }

        return $array;
    }

    /**
     * @psalm-pure
     *
     * @template T
     * @psalm-assert iterable<array<string, T>|null> $array
     *
     * @param iterable<mixed|array<array-key, T>|null> $array
     *
     * @return iterable<array<string, T>|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsMap(mixed $array, string $message = ''): mixed
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::isMap($entry, $message);
        }

        return $array;
    }

    /**
     * @psalm-assert callable|null $callable
     *
     * @param Closure|callable|null $callable
     *
     * @return callable|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsStatic(mixed $callable, string $message = ''): mixed
    {
        null === $callable || static::isStatic($callable, $message);

        return $callable;
    }

    /**
     * @psalm-assert iterable<callable> $callable
     *
     * @param iterable<Closure|callable> $callable
     *
     * @return iterable<callable>
     *
     * @throws InvalidArgumentException
     */
    public static function allIsStatic(mixed $callable, string $message = ''): mixed
    {
        static::isIterable($callable);

        foreach ($callable as $entry) {
            static::isStatic($entry, $message);
        }

        return $callable;
    }

    /**
     * @psalm-assert iterable<callable|null> $callable
     *
     * @param iterable<Closure|callable|null> $callable
     *
     * @return iterable<callable|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsStatic(mixed $callable, string $message = ''): mixed
    {
        static::isIterable($callable);

        foreach ($callable as $entry) {
            null === $entry || static::isStatic($entry, $message);
        }

        return $callable;
    }

    /**
     * @psalm-assert callable|null $callable
     *
     * @param Closure|callable|null $callable
     *
     * @return callable|null
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrNotStatic(mixed $callable, string $message = ''): mixed
    {
        null === $callable || static::notStatic($callable, $message);

        return $callable;
    }

    /**
     * @psalm-assert iterable<callable> $callable
     *
     * @param iterable<Closure|callable> $callable
     *
     * @return iterable<callable>
     *
     * @throws InvalidArgumentException
     */
    public static function allNotStatic(mixed $callable, string $message = ''): mixed
    {
        static::isIterable($callable);

        foreach ($callable as $entry) {
            static::notStatic($entry, $message);
        }

        return $callable;
    }

    /**
     * @psalm-assert iterable<callable|null> $callable
     *
     * @param iterable<Closure|callable|null> $callable
     *
     * @return iterable<callable|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrNotStatic(mixed $callable, string $message = ''): mixed
    {
        static::isIterable($callable);

        foreach ($callable as $entry) {
            null === $entry || static::notStatic($entry, $message);
        }

        return $callable;
    }

    /**
     * @psalm-pure
     *
     * @template T
     *
     * @param array<string, T>|null $array
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrIsNonEmptyMap(mixed $array, string $message = ''): mixed
    {
        null === $array || static::isNonEmptyMap($array, $message);

        return $array;
    }

    /**
     * @psalm-pure
     *
     * @template T
     *
     * @param iterable<array<string, T>> $array
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allIsNonEmptyMap(mixed $array, string $message = ''): mixed
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            static::isNonEmptyMap($entry, $message);
        }

        return $array;
    }

    /**
     * @psalm-pure
     *
     * @template T
     * @psalm-assert iterable<array<string, T>|null> $array
     * @psalm-assert iterable<!empty|null> $array
     *
     * @param iterable<array<string, T>|null> $array
     *
     * @return iterable<!empty|null>
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrIsNonEmptyMap(mixed $array, string $message = ''): mixed
    {
        static::isIterable($array);

        foreach ($array as $entry) {
            null === $entry || static::isNonEmptyMap($entry, $message);
        }

        return $array;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrUuid(mixed $value, string $message = ''): mixed
    {
        null === $value || static::uuid($value, $message);

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allUuid(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            static::uuid($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-pure
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrUuid(mixed $value, string $message = ''): iterable
    {
        static::isIterable($value);

        foreach ($value as $entry) {
            null === $entry || static::uuid($entry, $message);
        }

        return $value;
    }

    /**
     * @psalm-param class-string<Throwable> $class
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function nullOrThrows(mixed $expression, string $class = 'Throwable', string $message = ''): mixed
    {
        null === $expression || static::throws($expression, $class, $message);

        return $expression;
    }

    /**
     * @psalm-param class-string<Throwable> $class
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allThrows(mixed $expression, string $class = 'Throwable', string $message = ''): mixed
    {
        static::isIterable($expression);

        foreach ($expression as $entry) {
            static::throws($entry, $class, $message);
        }

        return $expression;
    }

    /**
     * @psalm-param class-string<Throwable> $class
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    public static function allNullOrThrows(mixed $expression, string $class = 'Throwable', string $message = ''): mixed
    {
        static::isIterable($expression);

        foreach ($expression as $entry) {
            null === $entry || static::throws($entry, $class, $message);
        }

        return $expression;
    }
}
