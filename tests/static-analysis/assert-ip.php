<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 */
function ip($value): mixed
{
    Assert::ip($value);

    return $value;
}

/**
 * @param mixed $value
 */
function nullOrIp($value): mixed
{
    Assert::nullOrIp($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allIp($value): mixed
{
    Assert::allIp($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allNullOrIp($value): mixed
{
    Assert::allNullOrIp($value);

    return $value;
}
