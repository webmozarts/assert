<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $limit
 *
 * @return mixed
 */
function lessThanEq($value, $limit)
{
    Assert::lessThanEq($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $limit
 *
 * @return mixed
 */
function nullOrLessThanEq($value, $limit)
{
    Assert::nullOrLessThanEq($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $limit
 *
 * @return mixed
 */
function allLessThanEq($value, $limit)
{
    Assert::allLessThanEq($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $limit
 *
 * @return mixed
 */
function allNullOrLessThanEq($value, $limit)
{
    Assert::allNullOrLessThanEq($value, $limit);

    return $value;
}
