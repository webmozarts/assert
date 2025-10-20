<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 */
function ipv4($value): mixed
{
    Assert::ipv4($value);

    return $value;
}

/**
 * @param mixed $value
 */
function nullOrIpv4($value): mixed
{
    Assert::nullOrIpv4($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allIpv4($value): mixed
{
    Assert::allIpv4($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allNullOrIpv4($value): mixed
{
    Assert::allNullOrIpv4($value);

    return $value;
}
