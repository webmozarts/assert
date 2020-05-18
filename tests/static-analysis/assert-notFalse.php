<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @param false|string $value
 */
function consume($value): string
{
    Assert::notFalse($value);

    return $value;
}
