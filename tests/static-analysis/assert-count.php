<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Countable;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @param Countable|array $value
 */
function consume($value): void
{
    Assert::count($value, 0);
}
