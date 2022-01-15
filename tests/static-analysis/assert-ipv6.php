<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 *
 * @return mixed
 */
function ipv6($value)
{
    Assert::ipv6($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return mixed
 */
function nullOrIpv6($value)
{
    Assert::nullOrIpv6($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return mixed
 */
function allIpv6($value)
{
    Assert::allIpv6($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return mixed
 */
function allNullOrIpv6($value)
{
    Assert::allNullOrIpv6($value);

    return $value;
}
