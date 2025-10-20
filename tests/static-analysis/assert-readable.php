<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

function readable(string $value): string
{
    Assert::readable($value);

    return $value;
}

function nullOrReadable(?string $value): ?string
{
    Assert::nullOrReadable($value);

    return $value;
}

/**
 * @param iterable<string> $value
 */
function allReadable(iterable $value): iterable
{
    Assert::allReadable($value);

    return $value;
}

/**
 * @param iterable<string|null> $value
 */
function allNullOrReadable(iterable $value): iterable
{
    Assert::allNullOrReadable($value);

    return $value;
}
