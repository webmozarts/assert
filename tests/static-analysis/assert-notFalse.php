<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param false|string $value
 */
function consume($value): string
{
    Assert::notFalse($value);

    return $value;
}
