<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 */
function directory(mixed $value): mixed
{
    Assert::directory($value);

    return $value;
}

/**
 * @param mixed $value
 */
function nullOrDirectory(mixed $value): mixed
{
    Assert::nullOrDirectory($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allDirectory(mixed $value): mixed
{
    Assert::allDirectory($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allNullOrDirectory(mixed $value): mixed
{
    Assert::allNullOrDirectory($value);

    return $value;
}
