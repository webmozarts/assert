<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Countable;
use Webmozart\Assert\Assert;

/**
 * @param Countable|array $value
 * @param int|float $min
 * @param int|float $max
 *
 * @return Countable|array
 */
function countBetween($value, $min, $max)
{
    Assert::countBetween($value, $min, $max);

    return $value;
}

/**
 * @param null|Countable|array $value
 * @param int|float $min
 * @param int|float $max
 *
 * @return null|Countable|array
 */
function nullOrCountBetween($value, $min, $max)
{
    Assert::nullOrCountBetween($value, $min, $max);

    return $value;
}

/**
 * @param iterable<Countable|array> $value
 * @param int|float $min
 * @param int|float $max
 *
 * @return iterable<Countable|array>
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
 *
 * @return iterable<Countable|array|null>
 */
function allNullOrCountBetween(iterable $value, $min, $max): iterable
{
    Assert::allNullOrCountBetween($value, $min, $max);

    return $value;
}
