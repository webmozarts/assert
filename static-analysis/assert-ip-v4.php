<?php

namespace Webmozart\Assert\StaticAnalysis\AssertString;

use Webmozart\Assert\Assert;

/** @param mixed $value */
function consume($value) : string
{
    Assert::ipv4($value);

    return $value;
}
