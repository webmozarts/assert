<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 */
function ip(mixed $value): mixed
{
    Assert::ip($value);

    return $value;
}

/**
 * @param mixed $value
 */
function nullOrIp(mixed $value): mixed
{
    Assert::nullOrIp($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allIp(mixed $value): mixed
{
    Assert::allIp($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allNullOrIp(mixed $value): mixed
{
    Assert::allNullOrIp($value);

    return $value;
}
