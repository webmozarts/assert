<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * 
 */
function file(mixed $value): mixed
{
    Assert::file($value);

    return $value;
}

/**
 * 
 */
function nullOrFile(mixed $value): mixed
{
    Assert::nullOrFile($value);

    return $value;
}

/**
 * 
 */
function allFile(mixed $value): mixed
{
    Assert::allFile($value);

    return $value;
}

/**
 * 
 */
function allNullOrFile(mixed $value): mixed
{
    Assert::allNullOrFile($value);

    return $value;
}
