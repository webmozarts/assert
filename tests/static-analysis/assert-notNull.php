<?php

namespace Webmozart\Assert\StaticAnalysis\AssertString;

use Webmozart\Assert\Assert;

function consume(?object $value): object
{
    Assert::notNull($value);

    return $value;
}
