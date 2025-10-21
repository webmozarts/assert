<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function object(mixed $value): object
{
    Assert::object($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrObject(mixed $value): ?object
{
    Assert::nullOrObject($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allObject(mixed $value): iterable
{
    Assert::allObject($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrObject(mixed $value): iterable
{
    Assert::allNullOrObject($value);

    return $value;
}
