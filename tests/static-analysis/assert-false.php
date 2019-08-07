<?php

namespace Webmozart\Assert\StaticAnalysis\AssertString;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 */
function consume($value): bool
{
    Assert::false($value);

    return $value;
}
