<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 */
function fileExists(mixed $value): mixed
{
    Assert::fileExists($value);

    return $value;
}

/**
 * @param mixed $value
 */
function nullOrFileExists(mixed $value): mixed
{
    Assert::nullOrFileExists($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allFileExists(mixed $value): mixed
{
    Assert::allFileExists($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allNullOrFileExists(mixed $value): mixed
{
    Assert::allNullOrFileExists($value);

    return $value;
}
