<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $min
 * @param mixed $max
 *
 * @return mixed
 */
function range($value, $min, $max)
{
    Assert::range($value, $min, $max);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $min
 * @param mixed $max
 *
 * @return mixed
 */
function nullOrRange($value, $min, $max)
{
    Assert::nullOrRange($value, $min, $max);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $min
 * @param mixed $max
 *
 * @return mixed
 */
function allRange($value, $min, $max)
{
    Assert::allRange($value, $min, $max);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $min
 * @param mixed $max
 *
 * @return mixed
 */
function allNullOrRange($value, $min, $max)
{
    Assert::allNullOrRange($value, $min, $max);

    return $value;
}
