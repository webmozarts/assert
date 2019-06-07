<?php

namespace Webmozart\Assert\StaticAnalysis\AssertString;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 *
 * @return class-string
 */
function consume($value)
{
    Assert::interfaceExists($value);

    return $value;
}
