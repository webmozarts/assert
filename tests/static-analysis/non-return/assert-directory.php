<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * 
 */
function directory(mixed $value): mixed
{
    Assert::directory($value);

    return $value;
}

/**
 * 
 */
function nullOrDirectory(mixed $value): mixed
{
    Assert::nullOrDirectory($value);

    return $value;
}

/**
 * 
 */
function allDirectory(mixed $value): mixed
{
    Assert::allDirectory($value);

    return $value;
}

/**
 * 
 */
function allNullOrDirectory(mixed $value): mixed
{
    Assert::allNullOrDirectory($value);

    return $value;
}
