<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @psalm-return positive-int|0
 */
function natural(mixed $value): int
{
    Assert::natural($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @psalm-return positive-int|0|null
 */
function nullOrNatural(mixed $value): ?int
{
    Assert::nullOrNatural($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return iterable<positive-int|0>
 */
function allNatural(mixed $value): iterable
{
    Assert::allNatural($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return iterable<positive-int|0|null>
 */
function allNullOrNatural(mixed $value): iterable
{
    Assert::allNullOrNatural($value);

    return $value;
}
