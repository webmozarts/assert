<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function scalar($value): int|float|string|bool
{
    Assert::scalar($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrScalar($value): int|float|string|bool|null
{
    Assert::nullOrScalar($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allScalar($value): iterable
{
    Assert::allScalar($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrScalar($value): iterable
{
    Assert::allNullOrScalar($value);

    return $value;
}
