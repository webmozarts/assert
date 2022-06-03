<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 *
 * @return mixed
 */
function file($value)
{
    Assert::file($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return mixed
 */
function nullOrFile($value)
{
    Assert::nullOrFile($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return mixed
 */
function allFile($value)
{
    Assert::allFile($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return mixed
 */
function allNullOrFile($value)
{
    Assert::allNullOrFile($value);

    return $value;
}
