<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

function readable(string $value): string
{
    return Assert::readable($value);
}

function nullOrReadable(?string $value): ?string
{
    return Assert::nullOrReadable($value);
}

/**
 * @param iterable<string> $value
 */
function allReadable(iterable $value): iterable
{
    return Assert::allReadable($value);
}

/**
 * @param iterable<string|null> $value
 */
function allNullOrReadable(iterable $value): iterable
{
    return Assert::allNullOrReadable($value);
}
