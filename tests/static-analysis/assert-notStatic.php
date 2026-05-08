<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

function notStatic(mixed $closure): callable
{
    return Assert::notStatic($closure);
}
