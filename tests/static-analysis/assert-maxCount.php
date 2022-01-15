<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Countable;
use Webmozart\Assert\Assert;

/**
 * @param Countable|array $array
 * @param int|float $max
 *
 * @return Countable|array
 */
function maxCount($array, $max)
{
    Assert::maxCount($array, $max);

    return $array;
}

/**
 * @param null|Countable|array $array
 * @param int|float $max
 *
 * @return null|Countable|array
 */
function nullOrMaxCount($array, $max)
{
    Assert::nullOrMaxCount($array, $max);

    return $array;
}

/**
 * @param iterable<Countable|array> $array
 * @param int|float $max
 *
 * @return iterable<Countable|array>
 */
function allMaxCount(iterable $array, $max): iterable
{
    Assert::allMaxCount($array, $max);

    return $array;
}

/**
 * @param iterable<Countable|array|null> $array
 * @param int|float $max
 *
 * @return iterable<Countable|array|null>
 */
function allNullOrMaxCount(iterable $array, $max): iterable
{
    Assert::allNullOrMaxCount($array, $max);

    return $array;
}
