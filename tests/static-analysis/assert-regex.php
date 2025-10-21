<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function regex(string $value, string $pattern): string
{
    Assert::regex($value, $pattern);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrRegex(?string $value, string $pattern): ?string
{
    Assert::nullOrRegex($value, $pattern);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 */
function allRegex(iterable $value, string $pattern): iterable
{
    Assert::allRegex($value, $pattern);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 */
function allNullOrRegex(iterable $value, string $pattern): iterable
{
    Assert::allRegex($value, $pattern);

    return $value;
}
