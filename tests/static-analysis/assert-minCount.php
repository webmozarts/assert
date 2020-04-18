<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Countable;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @param int|float $min
 */
function consume(Countable $value, $min): Countable
{
    Assert::minCount($value, $min);

    return $value;
}
