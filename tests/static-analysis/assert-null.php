<?php

namespace Webmozart\Assert\StaticAnalysis\AssertString;

use Webmozart\Assert\Assert;

/**
 * @return null
 */
function consume(?object $value)
{
    Assert::null($value);

    return $value;
}
