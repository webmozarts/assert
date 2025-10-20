<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Countable;
use Webmozart\Assert\Assert;

/**
 * @param Countable|array $array
 * @param int|float $min
 */
function minCount($array, $min): Countable|array {
    Assert::minCount($array, $min);

    return $array;
}

/**
 * @param null|Countable|array $array
 * @param int|float $min
 */
function nullOrMinCount($array, $min): null|Countable|array {
    Assert::nullOrMinCount($array, $min);

    return $array;
}

/**
 * @param iterable<Countable|array> $array
 * @param int|float $min
 *
 * @return iterable<Countable|array>
 */
function allMinCount($array, $min)
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
function allNullOrMinCount($array, $min)
{
    Assert::allNullOrMinCount($array, $min);

    return $array;
}
