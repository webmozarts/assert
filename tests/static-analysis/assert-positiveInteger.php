<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
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
 * @param mixed $value
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
 *
 * @param mixed $value
 */
function allPositiveInteger(mixed $value): iterable
{
    Assert::allPositiveInteger($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrPositiveInteger(mixed $value): iterable
{
    Assert::allPositiveInteger($value);

    return $value;
}
