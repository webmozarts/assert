<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function lengthBetween(string $value, int $min, int $max): string
{
    return Assert::lengthBetween($value, $min, $max);
}

/**
 * @psalm-pure
 */
function nullOrLengthBetween(?string $value, int $min, int $max): ?string
{
    return Assert::nullOrLengthBetween($value, $min, $max);
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 *
 * @return iterable<string>
 */
function allLengthBetween(iterable $value, int $min, int $max): iterable
{
    return Assert::allLengthBetween($value, $min, $max);
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 *
 * @return iterable<string|null>
 */
function allNullOrLengthBetween(iterable $value, int $min, int $max): iterable
{
    return Assert::allNullOrLengthBetween($value, $min, $max);
}
