<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Countable;
use Webmozart\Assert\Assert;

function consume(Countable $value): Countable
{
    Assert::countBetween($value, 1, 10);

    return $value;
}
