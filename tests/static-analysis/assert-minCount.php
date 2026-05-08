<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Countable;
use Webmozart\Assert\Assert;

/**
 * @param Countable|array $array
 * @param int|float $min
 */
function minCount($array, $min): Countable|array
{
    return Assert::minCount($array, $min);
}

/**
 * @param null|Countable|array $array
 * @param int|float $min
 */
function nullOrMinCount($array, $min): Countable|array|null
{
    return Assert::nullOrMinCount($array, $min);
}

/**
 * @param iterable<Countable|array> $array
 * @param int|float $min
 *
 * @return iterable<Countable|array>
 */
function allMinCount($array, $min)
{
    return Assert::allMinCount($array, $min);
}

/**
 * @param iterable<Countable|array|null> $array
 * @param int|float $min
 *
 * @return iterable<Countable|array|null>
 */
function allNullOrMinCount($array, $min)
{
    return Assert::allNullOrMinCount($array, $min);
}
