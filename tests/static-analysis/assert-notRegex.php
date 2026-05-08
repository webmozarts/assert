<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function notRegex(string $value, string $pattern): string
{
    return Assert::notRegex($value, $pattern);
}

/**
 * @psalm-pure
 */
function nullOrNotRegex(?string $value, string $pattern): ?string
{
    return Assert::nullOrNotRegex($value, $pattern);
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 */
function allNotRegex(iterable $value, string $pattern): iterable
{
    return Assert::allNotRegex($value, $pattern);
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 */
function allNullOrNotRegex(iterable $value, string $pattern): iterable
{
    return Assert::allNotRegex($value, $pattern);
}
