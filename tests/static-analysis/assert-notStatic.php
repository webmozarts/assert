<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

function notStatic(callable $closure): callable
{
    return Assert::notStatic($closure);
}
