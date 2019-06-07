<?php

namespace Webmozart\Assert\StaticAnalysis\AssertString;

use Webmozart\Assert\Assert;

/** @return object */
function consume(?object $value)
{
    Assert::notNull($value);

    return $value;
}
