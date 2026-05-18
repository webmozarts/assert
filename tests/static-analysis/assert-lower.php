<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return lowercase-string
 */
function lower(string $value): string
{
    return Assert::lower($value);
}

/**
 * @psalm-pure
 *
 * @return null|lowercase-string
 */
function nullOrLower(?string $value): ?string
{
    return Assert::nullOrLower($value);
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 */
function allLower(iterable $value): iterable
{
    return Assert::allLower($value);
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 */
function allNullOrLower(iterable $value): iterable
{
    return Assert::allNullOrLower($value);
}
