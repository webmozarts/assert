<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Countable;
use Webmozart\Assert\Assert;

/**
 * @param Countable|array $value
 * @return Countable|array
 */
function count(Countable|array $value, int $number): Countable|array
{
    Assert::count($value, $number);

    return $value;
}

/**
 * @param null|Countable|array $value
 * @return null|Countable|array
 */
function nullOrCount(Countable|array|null $value, int $number): Countable|array|null
{
    Assert::nullOrCount($value, $number);

    return $value;
}

/**
 * @param iterable<Countable|array> $value
 * @return iterable<Countable|array>
 */
function allCount(iterable $value, int $number): iterable
{
    Assert::allCount($value, $number);

    return $value;
}

/**
 * @param iterable<Countable|array|null> $value
 * @return iterable<Countable|array|null>
 */
function allNullOrCount(iterable $value, int $number): iterable
{
    Assert::allCount($value, $number);

    return $value;
}
