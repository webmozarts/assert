<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 *
 * @return mixed
 */
function fileExists($value)
{
    Assert::fileExists($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return mixed
 */
function nullOrFileExists($value)
{
    Assert::nullOrFileExists($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return mixed
 */
function allFileExists($value)
{
    Assert::allFileExists($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return mixed
 */
function allNullOrFileExists($value)
{
    Assert::allNullOrFileExists($value);

    return $value;
}
