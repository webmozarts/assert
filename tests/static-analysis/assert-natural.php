<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @psalm-return positive-int|0
 */
function natural(mixed $value): int
{
    return Assert::natural($value);
}

/**
 * @psalm-pure
 *
 * @psalm-return positive-int|0|null
 */
function nullOrNatural(mixed $value): ?int
{
    return Assert::nullOrNatural($value);
}

/**
 * @psalm-pure
 *
 * @return iterable<positive-int|0>
 */
function allNatural(mixed $value): iterable
{
    return Assert::allNatural($value);
}

/**
 * @psalm-pure
 *
 * @return iterable<positive-int|0|null>
 */
function allNullOrNatural(mixed $value): iterable
{
    return Assert::allNullOrNatural($value);
}
