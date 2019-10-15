<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 * @return string
 */
function consume($value) : string
{
    Assert::startsWithLetter($value);
    return $value;
}
