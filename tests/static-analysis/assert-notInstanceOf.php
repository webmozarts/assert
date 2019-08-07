<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

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
