<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function regex(string $value, string $pattern): string
{
    return Assert::regex($value, $pattern);
}

/**
 * @psalm-pure
 */
function nullOrRegex(?string $value, string $pattern): ?string
{
    return Assert::nullOrRegex($value, $pattern);
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 */
function allRegex(iterable $value, string $pattern): iterable
{
    return Assert::allRegex($value, $pattern);
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 */
function allNullOrRegex(iterable $value, string $pattern): iterable
{
    return Assert::allRegex($value, $pattern);
}
