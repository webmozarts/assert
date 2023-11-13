<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @psalm-return negative-int
 */
function negativeInteger($value): int
{
    Assert::negativeInteger($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @psalm-return negative-int|null
 */
function nullOrNegativeInteger($value): ?int
{
    Assert::nullOrNegativeInteger($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<negative-int>
 */
function allNegativeInteger($value): iterable
{
    Assert::allNegativeInteger($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<negative-int|null>
 */
function allNullOrNegativeInteger($value): iterable
{
    Assert::allNullOrNegativeInteger($value);

    return $value;
}
