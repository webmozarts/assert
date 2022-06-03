<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 *
 * @return mixed
 */
function ip($value)
{
    Assert::ip($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return mixed
 */
function nullOrIp($value)
{
    Assert::nullOrIp($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return mixed
 */
function allIp($value)
{
    Assert::allIp($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return mixed
 */
function allNullOrIp($value)
{
    Assert::allNullOrIp($value);

    return $value;
}
