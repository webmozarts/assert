<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function contains(string $value, string $subString): string
{
    return Assert::contains($value, $subString);
}

/**
 * @psalm-pure
 */
function nullOrContains(?string $value, string $subString): ?string
{
    return Assert::nullOrContains($value, $subString);
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 */
function allContains(iterable $value, string $subString): iterable
{
    return Assert::allContains($value, $subString);
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 */
function allNullOrContains(iterable $value, string $subString): iterable
{
    return Assert::allNullOrContains($value, $subString);
}
