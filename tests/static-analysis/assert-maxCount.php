<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Countable;
use Webmozart\Assert\Assert;

function consume(Countable $value): Countable
{
    Assert::maxCount($value, 1);

    return $value;
}
