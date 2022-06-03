<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return numeric
 */
function integerish($value)
{
    Assert::integerish($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return null|numeric
 */
function nullOrIntegerish($value)
{
    Assert::nullOrIntegerish($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<numeric>
 */
function allIntegerish($value): iterable
{
    Assert::allIntegerish($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<numeric|null>
 */
function allNullOrIntegerish($value): iterable
{
    Assert::allNullOrIntegerish($value);

    return $value;
}
