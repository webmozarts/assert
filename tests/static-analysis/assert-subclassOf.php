<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

class SubclassOfA
{
}

/**
 * @param mixed $value
 *
 * @psalm-pure
 * @psalm-return class-string<SubclassOfA>|SubclassOfA
 */
function consumeMixed($value)
{
    Assert::subclassOf($value, SubclassOfA::class);

    return $value;
}
