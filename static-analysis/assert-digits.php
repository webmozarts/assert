<?php

namespace Webmozart\Assert\StaticAnalysis\AssertString;

use Webmozart\Assert\Assert;

/**
 * @psalm-param mixed $value
 *
 * @return numeric
 */
function consume($value)
{
    Assert::digits($value);

    return $value;
}
