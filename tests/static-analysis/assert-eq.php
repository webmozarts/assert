<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 * @param mixed $expect
 *
 * @return mixed
 */
function eq($value, $expect)
{
    Assert::eq($value, $expect);

    return $value;
}

/**
 * @param mixed $value
 * @param mixed $expect
 *
 * @return mixed
 */
function nullOrEq($value, $expect)
{
    Assert::nullOrEq($value, $expect);

    return $value;
}

/**
 * @param mixed $value
 * @param mixed $expect
 *
 * @return mixed
 */
function allEq($value, $expect)
{
    Assert::allEq($value, $expect);

    return $value;
}

/**
 * @param mixed $value
 * @param mixed $expect
 *
 * @return mixed
 */
function allNullOrEq($value, $expect)
{
    Assert::allNullOrEq($value, $expect);

    return $value;
}
