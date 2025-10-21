<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 */
function file(mixed $value): mixed
{
    Assert::file($value);

    return $value;
}

/**
 * @param mixed $value
 */
function nullOrFile(mixed $value): mixed
{
    Assert::nullOrFile($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allFile(mixed $value): mixed
{
    Assert::allFile($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allNullOrFile(mixed $value): mixed
{
    Assert::allNullOrFile($value);

    return $value;
}
