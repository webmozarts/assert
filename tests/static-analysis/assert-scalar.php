<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return scalar
 */
function scalar(mixed $value): int|float|string|bool
{
    return Assert::scalar($value);
}

/**
 * @psalm-pure
 *
 * @return null|scalar
 */
function nullOrScalar(mixed $value): int|float|string|bool|null
{
    return Assert::nullOrScalar($value);
}

/**
 * @psalm-pure
 *
 * @return iterable<scalar>
 */
function allScalar(mixed $value): iterable
{
    return Assert::allScalar($value);
}

/**
 * @psalm-pure
 *
 * @return iterable<scalar|null>
 */
function allNullOrScalar(mixed $value): iterable
{
    return Assert::allNullOrScalar($value);
}
