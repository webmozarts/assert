<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @psalm-return positive-int|0
 */
function naturalNumber($value): int
{
    Assert::naturalNumber($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @psalm-return positive-int|0|null
 */
function nullOrNaturalNumber($value): ?int
{
    Assert::nullOrNaturalNumber($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<positive-int|0>
 */
function allPositiveInteger($value): iterable
{
    Assert::allNaturalNumber($value);

    return $value;
}
