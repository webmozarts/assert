<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 */
function fileExists($value): mixed
{
    Assert::fileExists($value);

    return $value;
}

/**
 * @param mixed $value
 */
function nullOrFileExists($value): mixed
{
    Assert::nullOrFileExists($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allFileExists($value): mixed
{
    Assert::allFileExists($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allNullOrFileExists($value): mixed
{
    Assert::allNullOrFileExists($value);

    return $value;
}
