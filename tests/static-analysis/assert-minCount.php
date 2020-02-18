<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Countable;
use Webmozart\Assert\Assert;

function consume(Countable $value): Countable
{
    Assert::minCount($value, 1);

    return $value;
}
