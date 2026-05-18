<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @psalm-return non-negative-int
 */
function nonNegativeInteger(mixed $value): int
{
    return Assert::notNegativeInteger($value);
}

/**
 * @psalm-pure
 *
 * @psalm-return non-negative-int|null
 */
function nullOrNonNegativeInteger(mixed $value): ?int
{
    return Assert::nullOrNotNegativeInteger($value);
}

/**
 * @psalm-pure
 *
 * @return iterable<non-negative-int>
 */
function allNonNegativeInteger(mixed $value): iterable
{
    return Assert::allNotNegativeInteger($value);
}

/**
 * @psalm-pure
 *
 * @return iterable<non-negative-int|null>
 */
function allNullOrNonNegativeInteger(mixed $value): iterable
{
    return Assert::allNullOrPositiveInteger($value);
}
