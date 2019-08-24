<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 */
function consume($value): bool
{
    Assert::true($value);

    return $value;
}
