<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Countable;
use Webmozart\Assert\Assert;

/**
 * @param Countable|array $array
 * @param int|float $max
 */
function maxCount(mixed $array, $max): Countable|array
{
    return Assert::maxCount($array, $max);
}

/**
 * @param null|Countable|array $array
 * @param int|float $max
 */
function nullOrMaxCount(mixed $array, $max): Countable|array|null
{
    return Assert::nullOrMaxCount($array, $max);
}

/**
 * @param iterable<Countable|array> $array
 * @param int|float $max
 */
function allMaxCount(iterable $array, $max): iterable
{
    return Assert::allMaxCount($array, $max);
}

/**
 * @param iterable<Countable|array|null> $array
 * @param int|float $max
 */
function allNullOrMaxCount(iterable $array, $max): iterable
{
    return Assert::allNullOrMaxCount($array, $max);
}
