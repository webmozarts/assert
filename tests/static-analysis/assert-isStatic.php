<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Closure;
use Webmozart\Assert\Assert;

function isStatic(Closure $closure): Closure
{
    Assert::isStatic($closure);

    return $closure;
}
