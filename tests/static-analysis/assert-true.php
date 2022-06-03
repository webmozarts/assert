<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return true
 */
function true($value): bool
{
    Assert::true($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return null|true
 */
function nullOrTrue($value): ?bool
{
    Assert::nullOrTrue($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<true>
 */
function allTrue($value): iterable
{
    Assert::allTrue($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<true|null>
 */
function allNullOrTrue($value): iterable
{
    Assert::allNullOrTrue($value);

    return $value;
}
