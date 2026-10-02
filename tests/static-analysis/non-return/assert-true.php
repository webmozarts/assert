<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
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
 * @return iterable<true>
 */
function allTrue(mixed $value): iterable
{
    Assert::allTrue($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return iterable<true|null>
 */
function allNullOrTrue(mixed $value): iterable
{
    Assert::allNullOrTrue($value);

    return $value;
}
