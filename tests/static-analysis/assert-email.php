<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 *
 * @return mixed
 */
function email($value)
{
    Assert::email($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return mixed
 */
function nullOrEmail($value)
{
    Assert::nullOrEmail($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return mixed
 */
function allEmail($value)
{
    Assert::allEmail($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return mixed
 */
function allNullOrEmail($value)
{
    Assert::allNullOrEmail($value);

    return $value;
}
