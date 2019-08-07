<?php

namespace Webmozart\Assert\StaticAnalysis\AssertString;

use Webmozart\Assert\Assert;


/**
 * @param mixed $value
 *
 * @return string
 * @psalm-return class-string
 */
function consume($value): string
{
    Assert::classExists($value);

    return $value;
}
