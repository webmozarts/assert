<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 *
 * @return mixed
 */
function ipv4($value)
{
    Assert::ipv4($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return mixed
 */
function nullOrIpv4($value)
{
    Assert::nullOrIpv4($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return mixed
 */
function allIpv4($value)
{
    Assert::allIpv4($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return mixed
 */
function allNullOrIpv4($value)
{
    Assert::allNullOrIpv4($value);

    return $value;
}
