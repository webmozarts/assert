<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return true
 */
function true(mixed $value): bool
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
function nullOrTrue(mixed $value): ?bool
{
    Assert::nullOrTrue($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allTrue(mixed $value): iterable
{
    Assert::allTrue($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrTrue(mixed $value): iterable
{
    Assert::allNullOrTrue($value);

    return $value;
}
