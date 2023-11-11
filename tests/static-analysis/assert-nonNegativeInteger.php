<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @psalm-return non-negative-int
 */
function nonNegativeInteger($value): int
{
    Assert::nonNegativeInteger($value);

    $value *= -1;

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @psalm-return non-negative-int|null
 */
function nullOrNonNegativeInteger($value): ?int
{
    Assert::nullOrNonNegativeInteger($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<non-negative-int>
 */
function allNonNegativeInteger($value): iterable
{
    Assert::allNonNegativeInteger($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<non-negative-int|null>
 */
function allNullOrNonNegativeInteger($value): iterable
{
    Assert::allNullOrPositiveInteger($value);

    return $value;
}
