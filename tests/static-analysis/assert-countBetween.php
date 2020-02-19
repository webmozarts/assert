<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Countable;
use Webmozart\Assert\Assert;

/**
 * @param int|float $min
 * @param int|float $max
 */
function consume(Countable $value, $min, $max): Countable
{
    Assert::countBetween($value, $min, $max);

    return $value;
}
