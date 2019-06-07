<?php

namespace Webmozart\Assert\StaticAnalysis\AssertString;

use Webmozart\Assert\Assert;

/**
 * @psalm-param string|numeric $value
 */
function consume($value) : string
{
    Assert::alpha($value);

    return $value;
}
