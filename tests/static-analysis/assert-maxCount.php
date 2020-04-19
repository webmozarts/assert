<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Countable;
use Webmozart\Assert\Assert;

/** @param int|float $max */
function consume(Countable $value, $max): Countable
{
    Assert::maxCount($value, $max);

    return $value;
}
