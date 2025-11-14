<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Countable;
use Webmozart\Assert\Assert;

/**
 * @param Countable|array $value
 */
function count(Countable|array $value, int $number): Countable|array
{
    Assert::count($value, $number);

    return $value;
}

/**
 * @param null|Countable|array $value
 */
function nullOrCount(Countable|array|null $value, int $number): Countable|array|null
{
    Assert::nullOrCount($value, $number);

    return $value;
}

/**
 * @param iterable<Countable|array> $value
 */
function allCount(iterable $value, int $number): iterable
{
    Assert::allCount($value, $number);

    return $value;
}

/**
 * @param iterable<Countable|array|null> $value
 */
function allNullOrCount(iterable $value, int $number): iterable
{
    Assert::allCount($value, $number);

    return $value;
}
