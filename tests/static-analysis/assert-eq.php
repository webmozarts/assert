<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 * @param mixed $expect
 */
function eq($value, $expect): mixed
{
    Assert::eq($value, $expect);

    return $value;
}

/**
 * @param mixed $value
 * @param mixed $expect
 */
function nullOrEq($value, $expect): mixed
{
    Assert::nullOrEq($value, $expect);

    return $value;
}

/**
 * @param mixed $value
 * @param mixed $expect
 */
function allEq($value, $expect): mixed
{
    Assert::allEq($value, $expect);

    return $value;
}

/**
 * @param mixed $value
 * @param mixed $expect
 */
function allNullOrEq($value, $expect): mixed
{
    Assert::allNullOrEq($value, $expect);

    return $value;
}
