<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 * @param mixed $expect
 *
 * @return mixed
 */
function notEq($value, $expect)
{
    Assert::notEq($value, $expect);

    return $value;
}

/**
 * @param mixed $value
 * @param mixed $expect
 *
 * @return mixed
 */
function nullOrNotEq($value, $expect)
{
    Assert::nullOrNotEq($value, $expect);

    return $value;
}

/**
 * @param mixed $value
 * @param mixed $expect
 *
 * @return mixed
 */
function allNotEq($value, $expect)
{
    Assert::allNotEq($value, $expect);

    return $value;
}

/**
 * @param mixed $value
 * @param mixed $expect
 *
 * @return mixed
 */
function allNullOrNotEq($value, $expect)
{
    Assert::allNullOrNotEq($value, $expect);

    return $value;
}
