<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Closure;
use Webmozart\Assert\Assert;

/**
 * @return Closure|callable-string
 */
function isStatic(mixed $closure): Closure|string
{
    return Assert::isStatic($closure);
}
