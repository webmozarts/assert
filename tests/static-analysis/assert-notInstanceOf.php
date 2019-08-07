<?php

namespace Webmozart\Assert\StaticAnalysis\AssertString;

use Webmozart\Assert\Assert;

class A {}
class B {}

/**
 * @param A|B $value
 */
function consume($value): A
{
    Assert::notInstanceOf($value, B::class);

    return $value;
}
