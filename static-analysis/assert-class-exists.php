<?php

namespace Webmozart\Assert\StaticAnalysis\AssertString;

use Webmozart\Assert\Assert;

/** @return class-string */
function consume(string $value)
{
    Assert::classExists($value);

    return $value;
}
