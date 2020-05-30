<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @psalm-template ExpectedType of object
 *
 * @param mixed $value
 * @param class-string<ExpectedType> $interface
 *
 * @return class-string<ExpectedType>
 */
function implementsInterface($value, $interface): string
{
    Assert::implementsInterface($value, $interface);

    return $value;
}

/**
 * @psalm-pure
 * @psalm-template ExpectedType of object
 *
 * @param mixed $value
 * @param class-string<ExpectedType> $interface
 *
 * @return null|class-string<ExpectedType>
 */
function nullOrImplementsInterface($value, $interface): ?string
{
    Assert::nullOrImplementsInterface($value, $interface);

    return $value;
}

/**
 * @psalm-pure
 * @psalm-template ExpectedType of object
 *
 * @param mixed $value
 * @param class-string<ExpectedType> $interface
 *
 * @return iterable<class-string<ExpectedType>>
 */
function allImplementsInterface($value, $interface): iterable
{
    Assert::allImplementsInterface($value, $interface);

    return $value;
}
