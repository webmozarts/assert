<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @psalm-return positive-int
 */
function positiveInteger($value): int
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
function positiveIntegerFiltersOutZero($value): int
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
function nullOrPositiveInteger($value): ?int
{
    Assert::nullOrPositiveInteger($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<positive-int>
 */
function allPositiveInteger($value): iterable
{
    Assert::allPositiveInteger($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<positive-int|null>
 */
function allNullOrPositiveInteger($value): iterable
{
    Assert::allPositiveInteger($value);

    return $value;
}
