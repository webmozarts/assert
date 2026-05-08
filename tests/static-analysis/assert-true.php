<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return true
 */
function true(mixed $value): bool
{
    return Assert::true($value);
}

/**
 * @psalm-pure
 *
 * @return null|true
 */
function nullOrTrue(mixed $value): ?bool
{
    return Assert::nullOrTrue($value);
}

/**
 * @psalm-pure
 */
function allTrue(mixed $value): iterable
{
    return Assert::allTrue($value);
}

/**
 * @psalm-pure
 */
function allNullOrTrue(mixed $value): iterable
{
    return Assert::allNullOrTrue($value);
}
