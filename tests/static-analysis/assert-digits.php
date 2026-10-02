<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function digits(string $value): string
{
    return Assert::digits($value);
}

/**
 * @psalm-pure
 */
function nullOrDigits(?string $value): ?string
{
    return Assert::nullOrDigits($value);
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 * @return iterable<string>
 */
function allDigits(iterable $value): iterable
{
    return Assert::allDigits($value);
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 * @return iterable<string|null>
 */
function allNullOrDigits(iterable $value): iterable
{
    return Assert::allNullOrDigits($value);
}
