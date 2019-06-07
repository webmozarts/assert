<?php

namespace Webmozart\Assert\StaticAnalysis\AssertString;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 *
 * @return numeric
 */
function consume($value)
{
    Assert::integerish($value);

    return $value;
}
