<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function startsWith(string $value, string $prefix): string
{
    return Assert::startsWith($value, $prefix);
}

/**
 * @psalm-pure
 */
function nullOrStartsWith(?string $value, string $prefix): ?string
{
    return Assert::nullOrStartsWith($value, $prefix);
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 */
function allStartsWith(iterable $value, string $prefix): iterable
{
    return Assert::allStartsWith($value, $prefix);
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 */
function allNullOrStartsWith(iterable $value, string $prefix): iterable
{
    return Assert::allNullOrStartsWith($value, $prefix);
}
