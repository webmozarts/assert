<?php

namespace Webmozart\Assert\StaticAnalysis\AssertString;

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
