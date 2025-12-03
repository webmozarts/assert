<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Closure;
use Webmozart\Assert\Assert;

function notStatic(Closure $closure): Closure
{
    Assert::notStatic($closure);

    return $closure;
}
