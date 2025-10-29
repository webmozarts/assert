<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function digits(string $value): string
{
    Assert::digits($value);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrDigits(?string $value): ?string
{
    Assert::nullOrDigits($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 */
function allDigits(iterable $value): iterable
{
    Assert::allDigits($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 */
function allNullOrDigits(iterable $value): iterable
{
    Assert::allNullOrDigits($value);

    return $value;
}
