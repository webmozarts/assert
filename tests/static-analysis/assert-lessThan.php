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
function lessThan($value, $limit)
{
    Assert::lessThan($value, $limit);

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
function nullOrLessThan($value, $limit)
{
    Assert::nullOrLessThan($value, $limit);

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
function allLessThan($value, $limit)
{
    Assert::allLessThan($value, $limit);

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
function allNullOrLessThan($value, $limit)
{
    Assert::allNullOrLessThan($value, $limit);

    return $value;
}
