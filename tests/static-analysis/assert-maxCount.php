<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Countable;
use Webmozart\Assert\Assert;

/**
 * @param Countable|array $array
 * @param int|float $max
 * @return Countable|array
 */
function maxCount(mixed $array, $max): Countable|array
{
    return Assert::maxCount($array, $max);
}

/**
 * @param null|Countable|array $array
 * @param int|float $max
 * @return null|Countable|array
 */
function nullOrMaxCount(mixed $array, $max): Countable|array|null
{
    return Assert::nullOrMaxCount($array, $max);
}

/**
 * @param iterable<Countable|array> $array
 * @param int|float $max
 * @return iterable<Countable|array>
 */
function allMaxCount(iterable $array, $max): iterable
{
    return Assert::allMaxCount($array, $max);
}

/**
 * @param iterable<Countable|array|null> $array
 * @param int|float $max
 * @return iterable<Countable|array|null>
 */
function allNullOrMaxCount(iterable $array, $max): iterable
{
    return Assert::allNullOrMaxCount($array, $max);
}
