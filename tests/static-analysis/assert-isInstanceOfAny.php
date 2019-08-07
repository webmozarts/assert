<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

class A {}
class B {}

/**
 * @param mixed $value
 *
 * @return A|B
 */
function consume($value)
{
    Assert::isInstanceOfAny($value, [new A(), new B()]);

    return $value;
}
