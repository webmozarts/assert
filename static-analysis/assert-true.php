<?php

namespace Webmozart\Assert\StaticAnalysis\AssertString;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 *
 * @return true
 */
function consume($value) : bool
{
    Assert::true($value);

    return $value;
}
