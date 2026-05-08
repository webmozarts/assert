<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

function isStatic(mixed $closure): callable
{
    return Assert::isStatic($closure);
}
