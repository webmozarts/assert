<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 */
function directory($value): mixed
{
    Assert::directory($value);

    return $value;
}

/**
 * @param mixed $value
 */
function nullOrDirectory($value): mixed
{
    Assert::nullOrDirectory($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allDirectory($value): mixed
{
    Assert::allDirectory($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allNullOrDirectory($value): mixed
{
    Assert::allNullOrDirectory($value);

    return $value;
}
