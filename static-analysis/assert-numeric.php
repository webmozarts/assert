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
    Assert::numeric($value);

    return $value;
}
