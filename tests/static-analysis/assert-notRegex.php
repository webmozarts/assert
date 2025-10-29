<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function notRegex(string $value, string $pattern): string
{
    Assert::notRegex($value, $pattern);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrNotRegex(?string $value, string $pattern): ?string
{
    Assert::nullOrNotRegex($value, $pattern);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 */
function allNotRegex(iterable $value, string $pattern): iterable
{
    Assert::allNotRegex($value, $pattern);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 */
function allNullOrNotRegex(iterable $value, string $pattern): iterable
{
    Assert::allNotRegex($value, $pattern);

    return $value;
}
