<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Countable;
use Webmozart\Assert\Assert;

/**
 * @psalm-param object $value
 */
function consume($value): Countable
{
    Assert::isCountable($value);
    count($value);


    return $value;
}
