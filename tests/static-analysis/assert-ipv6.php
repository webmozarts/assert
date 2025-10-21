<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 */
function ipv6($value): mixed
{
    Assert::ipv6($value);

    return $value;
}

/**
 * @param mixed $value
 */
function nullOrIpv6($value): mixed
{
    Assert::nullOrIpv6($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allIpv6($value): mixed
{
    Assert::allIpv6($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allNullOrIpv6($value): mixed
{
    Assert::allNullOrIpv6($value);

    return $value;
}
