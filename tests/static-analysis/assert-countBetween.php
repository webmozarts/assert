<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Countable;
use Webmozart\Assert\Assert;

/**
 * @param Countable|array $value
 * @param int|float $min
 * @param int|float $max
 */
function countBetween($value, $min, $max): Countable|array
{
    Assert::countBetween($value, $min, $max);

    return $value;
}

/**
 * @param null|Countable|array $value
 * @param int|float $min
 * @param int|float $max
 */
function nullOrCountBetween($value, $min, $max): Countable|array|null
{
    Assert::nullOrCountBetween($value, $min, $max);

    return $value;
}

/**
 * @param iterable<Countable|array> $value
 * @param int|float $min
 * @param int|float $max
 */
function allCountBetween(iterable $value, $min, $max): iterable
{
    Assert::allCountBetween($value, $min, $max);

    return $value;
}

/**
 * @param iterable<Countable|array|null> $value
 * @param int|float $min
 * @param int|float $max
 */
function allNullOrCountBetween(iterable $value, $min, $max): iterable
{
    Assert::allNullOrCountBetween($value, $min, $max);

    return $value;
}
