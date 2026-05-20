<?php

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

function notStatic(callable $closure): callable
{
    Assert::notStatic($closure);

    return $closure;
}
