<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * 
 */
function directory(mixed $value): mixed
{
    return Assert::directory($value);
}

/**
 * 
 */
function nullOrDirectory(mixed $value): mixed
{
    return Assert::nullOrDirectory($value);
}

/**
 * 
 */
function allDirectory(mixed $value): mixed
{
    return Assert::allDirectory($value);
}

/**
 * 
 */
function allNullOrDirectory(mixed $value): mixed
{
    return Assert::allNullOrDirectory($value);
}
