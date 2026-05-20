<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function length(string $value, int $length): string
{
    return Assert::length($value, $length);
}

/**
 * @psalm-pure
 */
function nullOrLength(?string $value, int $length): ?string
{
    return Assert::nullOrLength($value, $length);
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 */
function allLength(iterable $value, int $length): iterable
{
    return Assert::allLength($value, $length);
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 */
function allNullOrLength(iterable $value, int $length): iterable
{
    return Assert::allNullOrLength($value, $length);
}
