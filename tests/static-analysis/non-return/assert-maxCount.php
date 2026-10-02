<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Countable;
use Webmozart\Assert\Assert;

/**
 * @param Countable|array $array
 * @param int|float $max
 * @return Countable|array
 */
function maxCount(mixed $array, $max): Countable|array
{
    Assert::maxCount($array, $max);

    return $array;
}

/**
 * @param null|Countable|array $array
 * @param int|float $max
 * @return null|Countable|array
 */
function nullOrMaxCount(mixed $array, $max): Countable|array|null
{
    Assert::nullOrMaxCount($array, $max);

    return $array;
}

/**
 * @param iterable<Countable|array> $array
 * @param int|float $max
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
 * @return iterable<Countable|array|null>
 */
function allNullOrMaxCount(iterable $array, $max): iterable
{
    Assert::allNullOrMaxCount($array, $max);

    return $array;
}
