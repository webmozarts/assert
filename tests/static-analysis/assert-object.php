<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function object($value): object
{
    Assert::object($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrObject($value): ?object
{
    Assert::nullOrObject($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<object>
 */
function allObject($value): iterable
{
    Assert::allObject($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<object|null>
 */
function allNullOrObject($value): iterable
{
    Assert::allNullOrObject($value);

    return $value;
}
