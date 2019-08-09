<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

class SameA {}

/**
 * @param mixed $value
 */
function consume($value) : SameA
{
    Assert::same($value, new SameA());
    return $value;
}
