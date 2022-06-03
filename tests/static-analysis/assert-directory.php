<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 *
 * @return mixed
 */
function directory($value)
{
    Assert::directory($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return mixed
 */
function nullOrDirectory($value)
{
    Assert::nullOrDirectory($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return mixed
 */
function allDirectory($value)
{
    Assert::allDirectory($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return mixed
 */
function allNullOrDirectory($value)
{
    Assert::allNullOrDirectory($value);

    return $value;
}
