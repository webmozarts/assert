<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function natural($value): int
{
    Assert::natural($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrNatural($value): ?int
{
    Assert::nullOrNatural($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<int>
 */
function allNatural($value): iterable
{
    Assert::allNatural($value);

    return $value;
}
