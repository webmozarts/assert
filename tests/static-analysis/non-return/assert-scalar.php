<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return scalar
 */
function scalar(mixed $value): int|float|string|bool
{
    Assert::scalar($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return null|scalar
 */
function nullOrScalar(mixed $value): int|float|string|bool|null
{
    Assert::nullOrScalar($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return iterable<scalar>
 */
function allScalar(mixed $value): iterable
{
    Assert::allScalar($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return iterable<scalar|null>
 */
function allNullOrScalar(mixed $value): iterable
{
    Assert::allNullOrScalar($value);

    return $value;
}
