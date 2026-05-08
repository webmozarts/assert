<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function upper(mixed $value): string
{
    return Assert::upper($value);
}

/**
 * @psalm-pure
 */
function nullOrUpper(?string $value): ?string
{
    return Assert::nullOrUpper($value);
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 */
function allUpper(iterable $value): iterable
{
    return Assert::allUpper($value);
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 */
function allNullOrUpper(iterable $value): iterable
{
    return Assert::allNullOrUpper($value);
}
