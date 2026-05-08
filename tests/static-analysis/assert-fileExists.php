<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * 
 */
function fileExists(mixed $value): mixed
{
    return Assert::fileExists($value);
}

/**
 * 
 */
function nullOrFileExists(mixed $value): mixed
{
    return Assert::nullOrFileExists($value);
}

/**
 * 
 */
function allFileExists(mixed $value): mixed
{
    return Assert::allFileExists($value);
}

/**
 * 
 */
function allNullOrFileExists(mixed $value): mixed
{
    return Assert::allNullOrFileExists($value);
}
