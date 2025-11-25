<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Countable;
use Webmozart\Assert\Assert;

/**
 * @param Countable|array $array
 * @param int|float $max
 */
function maxCount($array, $max): Countable|array
{
    Assert::maxCount($array, $max);

    return $array;
}

/**
 * @param null|Countable|array $array
 * @param int|float $max
 */
function nullOrMaxCount($array, $max): Countable|array|null
{
    Assert::nullOrMaxCount($array, $max);

    return $array;
}

/**
 * @param iterable<Countable|array> $array
 * @param int|float $max
 */
function allMaxCount(iterable $array, $max): iterable
{
    Assert::allMaxCount($array, $max);

    return $array;
}

/**
 * @param iterable<Countable|array|null> $array
 * @param int|float $max
 */
function allNullOrMaxCount(iterable $array, $max): iterable
{
    Assert::allNullOrMaxCount($array, $max);

    return $array;
}
