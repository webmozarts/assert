<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 *
 * @return mixed
 */
function url($value)
{
    Assert::url($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return mixed
 */
function nullOrUrl($value)
{
    Assert::nullOrUrl($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return mixed
 */
function allUrl($value)
{
    Assert::allUrl($value);

    return $value;
}
