<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Countable;
use Webmozart\Assert\Assert;

/**
 * @param Countable|array $value
 *
 * @return Countable|array
 */
function count($value, int $number)
{
    Assert::count($value, $number);

    return $value;
}

/**
 * @param null|Countable|array $value
 *
 * @return null|Countable|array
 */
function nullOrCount($value, int $number)
{
    Assert::nullOrCount($value, $number);

    return $value;
}

/**
 * @param iterable<Countable|array> $value
 *
 * @return iterable<Countable|array>
 */
function allCount(iterable $value, int $number): iterable
{
    Assert::allCount($value, $number);

    return $value;
}
