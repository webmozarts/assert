<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 */
function email($value): mixed
{
    Assert::email($value);

    return $value;
}

/**
 * @param mixed $value
 */
function nullOrEmail($value): mixed
{
    Assert::nullOrEmail($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allEmail($value): mixed
{
    Assert::allEmail($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allNullOrEmail($value): mixed
{
    Assert::allNullOrEmail($value);

    return $value;
}
