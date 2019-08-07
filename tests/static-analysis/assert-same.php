<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

class A {}

/**
 * @param mixed $value
 */
function consume($value) : A
{
    Assert::same($value, new A());
    return $value;
}
