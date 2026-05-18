<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @psalm-return positive-int
 */
function positiveInteger(mixed $value): int
{
    return Assert::positiveInteger($value);
}

/**
 * @psalm-pure
 *
 * @param 0|1|2 $value
 *
 * @psalm-return 1|2
 */
function positiveIntegerFiltersOutZero(mixed $value): int
{
    return Assert::positiveInteger($value);
}

/**
 * @psalm-pure
 *
 * @psalm-return positive-int|null
 */
function nullOrPositiveInteger(mixed $value): ?int
{
    return Assert::nullOrPositiveInteger($value);
}

/**
 * @psalm-pure
 */
function allPositiveInteger(mixed $value): iterable
{
    return Assert::allPositiveInteger($value);
}

/**
 * @psalm-pure
 */
function allNullOrPositiveInteger(mixed $value): iterable
{
    return Assert::allPositiveInteger($value);
}
