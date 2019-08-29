<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use stdClass;
use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 */
function consume($value) : stdClass
{
    Assert::isInstanceOf($value, stdClass::class);

    return $value;
}
