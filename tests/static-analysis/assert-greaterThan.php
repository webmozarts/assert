<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function consume(int $value): int
{
    Assert::greaterThan($value, 1);

    return $value;
}
