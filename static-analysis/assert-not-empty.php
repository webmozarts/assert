<?php

namespace Webmozart\Assert\StaticAnalysis\AssertString;

use Webmozart\Assert\Assert;

/** @return object */
function consume(?object $value)
{
    Assert::notEmpty($value);

    return $value;
}
