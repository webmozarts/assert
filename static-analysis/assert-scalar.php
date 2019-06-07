<?php

namespace Webmozart\Assert\StaticAnalysis\AssertString;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 *
 * @return scalar
 */
function consume($value)
{
    Assert::scalar($value);

    return $value;
}
