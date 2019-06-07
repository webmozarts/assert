<?php

namespace Webmozart\Assert\StaticAnalysis\AssertString;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 *
 * @return false
 */
function consume($value) : bool
{
    Assert::false($value);

    return $value;
}
