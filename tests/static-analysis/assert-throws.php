<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Closure;
use Webmozart\Assert\Assert;

function consume(Closure $value): Closure
{
    Assert::throws($value);

    return $value;
}
