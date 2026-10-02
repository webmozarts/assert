<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

function writable(string $value): string
{
    return Assert::writable($value);
}

function nullOrWritable(?string $value): ?string
{
    return Assert::nullOrWritable($value);
}

/**
 * @param iterable<string> $value
 * @return iterable<string>
 */
function allWritable(iterable $value): iterable
{
    return Assert::allWritable($value);
}

/**
 * @param iterable<string|null> $value
 * @return iterable<string|null>
 */
function allNullOrWritable(iterable $value): iterable
{
    return Assert::allNullOrWritable($value);
}
