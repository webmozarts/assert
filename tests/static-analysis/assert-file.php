<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 */
function file($value): mixed
{
    Assert::file($value);

    return $value;
}

/**
 * @param mixed $value
 */
function nullOrFile($value): mixed
{
    Assert::nullOrFile($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allFile($value): mixed
{
    Assert::allFile($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allNullOrFile($value): mixed
{
    Assert::allNullOrFile($value);

    return $value;
}
