<?php

namespace Webmozart\Assert\StaticAnalysis\AssertString;

use Webmozart\Assert\Assert;

/** @param mixed $value */
function consume($value) : \stdClass
{
    Assert::isInstanceOf($value, \stdClass::class);

    return $value;
}
