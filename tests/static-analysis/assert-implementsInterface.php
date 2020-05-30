<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @psalm-template T of object
 *
 * @param mixed $value
 * @param class-string<T> $interface
 *
 * @return class-string<T>
 */
function implementsInterface($value, $interface): string
{
    Assert::implementsInterface($value, $interface);

    return $value;
}

/**
 * @psalm-pure
 * @psalm-template T of object
 *
 * @param mixed $value
 * @param class-string<T> $interface
 *
 * @return null|class-string<T>
 */
function nullOrImplementsInterface($value, $interface): ?string
{
    Assert::nullOrImplementsInterface($value, $interface);

    return $value;
}

/**
 * @psalm-pure
 * @psalm-template T of object
 *
 * @param mixed $value
 * @param class-string<T> $interface
 *
 * @return iterable<class-string<T>>
 */
function allImplementsInterface($value, $interface): iterable
{
    Assert::allImplementsInterface($value, $interface);

    return $value;
}
