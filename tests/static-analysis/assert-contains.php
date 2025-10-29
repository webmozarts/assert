<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function contains(string $value, string $subString): string
{
    Assert::contains($value, $subString);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrContains(?string $value, string $subString): ?string
{
    Assert::nullOrContains($value, $subString);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 */
function allContains(iterable $value, string $subString): iterable
{
    Assert::allContains($value, $subString);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 */
function allNullOrContains(iterable $value, string $subString): iterable
{
    Assert::allNullOrContains($value, $subString);

    return $value;
}
