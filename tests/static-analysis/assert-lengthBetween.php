<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param int|float $min
 * @param int|float $max
 */
function lengthBetween(string $value, $min, $max): string
{
    Assert::lengthBetween($value, $min, $max);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param int|float $min
 * @param int|float $max
 */
function nullOrLengthBetween(?string $value, $min, $max): ?string
{
    Assert::nullOrLengthBetween($value, $min, $max);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 * @param int|float $min
 * @param int|float $max
 *
 * @return iterable<string>
 */
function allLengthBetween(iterable $value, $min, $max): iterable
{
    Assert::allLengthBetween($value, $min, $max);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 * @param int|float $min
 * @param int|float $max
 *
 * @return iterable<string|null>
 */
function allNullOrLengthBetween(iterable $value, $min, $max): iterable
{
    Assert::allNullOrLengthBetween($value, $min, $max);

    return $value;
}
