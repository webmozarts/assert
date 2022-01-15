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
function greaterThan($value, $limit)
{
    Assert::greaterThan($value, $limit);

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
function nullOrGreaterThan($value, $limit)
{
    Assert::nullOrGreaterThan($value, $limit);

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
function allGreaterThan($value, $limit)
{
    Assert::allGreaterThan($value, $limit);

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
function allNullOrGreaterThan($value, $limit)
{
    Assert::allNullOrGreaterThan($value, $limit);

    return $value;
}
