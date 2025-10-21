<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function lengthBetween(string $value, int $min, int $max): string
{
    Assert::lengthBetween($value, $min, $max);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrLengthBetween(?string $value, int $min, int $max): ?string
{
    Assert::nullOrLengthBetween($value, $min, $max);

    return $value;
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
    Assert::allLengthBetween($value, $min, $max);

    return $value;
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
    Assert::allNullOrLengthBetween($value, $min, $max);

    return $value;
}
