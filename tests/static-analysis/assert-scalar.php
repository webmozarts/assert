<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return scalar
 */
function scalar($value)
{
    Assert::scalar($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return null|scalar
 */
function nullOrScalar($value)
{
    Assert::nullOrScalar($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<scalar>
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
 *
 * @return iterable<scalar|null>
 */
function allNullOrScalar($value): iterable
{
    Assert::allNullOrScalar($value);

    return $value;
}
