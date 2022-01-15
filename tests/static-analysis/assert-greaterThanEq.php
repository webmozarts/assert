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
function greaterThanEq($value, $limit)
{
    Assert::greaterThanEq($value, $limit);

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
function nullOrGreaterThanEq($value, $limit)
{
    Assert::nullOrGreaterThanEq($value, $limit);

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
function allGreaterThanEq($value, $limit)
{
    Assert::allGreaterThanEq($value, $limit);

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
function allNullOrGreaterThanEq($value, $limit)
{
    Assert::allNullOrGreaterThanEq($value, $limit);

    return $value;
}
