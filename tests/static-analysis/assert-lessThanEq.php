<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $limit
 */
function lessThanEq($value, $limit): mixed
{
    Assert::lessThanEq($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $limit
 */
function nullOrLessThanEq($value, $limit): mixed
{
    Assert::nullOrLessThanEq($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $limit
 */
function allLessThanEq($value, $limit): mixed
{
    Assert::allLessThanEq($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $limit
 */
function allNullOrLessThanEq($value, $limit): mixed
{
    Assert::allNullOrLessThanEq($value, $limit);

    return $value;
}
