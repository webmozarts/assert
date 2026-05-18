<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @psalm-return positive-int
 */
function positiveInteger(mixed $value): int
{
    Assert::positiveInteger($value);

    return $value;
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
    Assert::positiveInteger($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @psalm-return positive-int|null
 */
function nullOrPositiveInteger(mixed $value): ?int
{
    Assert::nullOrPositiveInteger($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allPositiveInteger(mixed $value): iterable
{
    Assert::allPositiveInteger($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrPositiveInteger(mixed $value): iterable
{
    Assert::allPositiveInteger($value);

    return $value;
}
