<?php

namespace Webmozart\Assert\StaticAnalysis\AssertString;

use Webmozart\Assert\Assert;

/**
 * @psalm-param string|numeric $value
 *
 * @psalm-return numeric
 */
function consume($value)
{
    Assert::numeric($value);

    return $value;
}
