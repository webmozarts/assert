<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Closure;
use Webmozart\Assert\Assert;

/**
 * @return Closure|callable-string
 */
function notStatic(mixed $closure): Closure|string
{
    return Assert::notStatic($closure);
}
