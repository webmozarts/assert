<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Countable;
use Webmozart\Assert\Assert;

/**
 * @param Countable|array $array
 * @param int|float $min
 */
function minCount(mixed $array, $min): Countable|array
{
    Assert::minCount($array, $min);

    return $array;
}

/**
 * @param null|Countable|array $array
 * @param int|float $min
 */
function nullOrMinCount(mixed $array, $min): Countable|array|null
{
    Assert::nullOrMinCount($array, $min);

    return $array;
}

/**
 * @param iterable<Countable|array> $array
 * @param int|float $min
 *
 * @return iterable<Countable|array>
 */
function allMinCount(mixed $array, $min)
{
    Assert::allMinCount($array, $min);

    return $array;
}

/**
 * @param iterable<Countable|array|null> $array
 * @param int|float $min
 *
 * @return iterable<Countable|array|null>
 */
function allNullOrMinCount(mixed $array, $min)
{
    Assert::allNullOrMinCount($array, $min);

    return $array;
}
