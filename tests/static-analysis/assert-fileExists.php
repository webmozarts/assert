<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 */
function fileExists($value): string
{
    Assert::fileExists($value);

    return $value;
}

/**
 * @param mixed $value
 */
function nullOrFileExists($value): ?string
{
    Assert::nullOrFileExists($value);

    return $value;
}

/**
 * @return iterable<string>
 */
function allFileExists(iterable $value): iterable
{
    Assert::allFileExists($value);

    return $value;
}
