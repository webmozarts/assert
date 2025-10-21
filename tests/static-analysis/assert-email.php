<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 */
function email(mixed $value): mixed
{
    Assert::email($value);

    return $value;
}

/**
 * @param mixed $value
 */
function nullOrEmail(mixed $value): mixed
{
    Assert::nullOrEmail($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allEmail(mixed $value): mixed
{
    Assert::allEmail($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allNullOrEmail(mixed $value): mixed
{
    Assert::allNullOrEmail($value);

    return $value;
}
