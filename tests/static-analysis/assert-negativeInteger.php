<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @psalm-return negative-int
 */
function negativeInteger(mixed $value): int
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
function nullOrNegativeInteger(mixed $value): ?int
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
function allNegativeInteger(mixed $value): iterable
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
function allNullOrNegativeInteger(mixed $value): iterable
{
    Assert::allNullOrNegativeInteger($value);

    return $value;
}
