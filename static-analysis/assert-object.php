<?php

namespace Webmozart\Assert\StaticAnalysis\AssertString;

use Webmozart\Assert\Assert;

/** @param mixed $value */
function consume($value) : object
{
    Assert::object($value);

    return $value;
}
