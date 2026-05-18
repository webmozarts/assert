<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @psalm-return non-negative-int
 */
function nonNegativeInteger(mixed $value): int
{
    Assert::notNegativeInteger($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @psalm-return non-negative-int|null
 */
function nullOrNonNegativeInteger(mixed $value): ?int
{
    Assert::nullOrNotNegativeInteger($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return iterable<non-negative-int>
 */
function allNonNegativeInteger(mixed $value): iterable
{
    Assert::allNotNegativeInteger($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return iterable<non-negative-int|null>
 */
function allNullOrNonNegativeInteger(mixed $value): iterable
{
    Assert::allNullOrPositiveInteger($value);

    return $value;
}
