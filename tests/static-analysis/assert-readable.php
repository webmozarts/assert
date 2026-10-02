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
 * @return iterable<string>
 */
function allReadable(iterable $value): iterable
{
    return Assert::allReadable($value);
}

/**
 * @param iterable<string|null> $value
 * @return iterable<string|null>
 */
function allNullOrReadable(iterable $value): iterable
{
    return Assert::allNullOrReadable($value);
}
