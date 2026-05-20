<?php

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

function isStatic(callable $closure): callable
{
    Assert::isStatic($closure);

    return $closure;
}
