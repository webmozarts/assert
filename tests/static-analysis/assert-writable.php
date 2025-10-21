<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

function writable(string $value): string
{
    Assert::writable($value);

    return $value;
}

function nullOrWritable(?string $value): ?string
{
    Assert::nullOrWritable($value);

    return $value;
}

/**
 * @param iterable<string> $value
 */
function allWritable(iterable $value): iterable
{
    Assert::allWritable($value);

    return $value;
}

/**
 * @param iterable<string|null> $value
 */
function allNullOrWritable(iterable $value): iterable
{
    Assert::allNullOrWritable($value);

    return $value;
}
