<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @psalm-return negative-int
 */
function negativeInteger(mixed $value): int
{
    return Assert::negativeInteger($value);
}

/**
 * @psalm-pure
 *
 * @psalm-return negative-int|null
 */
function nullOrNegativeInteger(mixed $value): ?int
{
    return Assert::nullOrNegativeInteger($value);
}

/**
 * @psalm-pure
 *
 * @return iterable<negative-int>
 */
function allNegativeInteger(mixed $value): iterable
{
    return Assert::allNegativeInteger($value);
}

/**
 * @psalm-pure
 *
 * @return iterable<negative-int|null>
 */
function allNullOrNegativeInteger(mixed $value): iterable
{
    return Assert::allNullOrNegativeInteger($value);
}
