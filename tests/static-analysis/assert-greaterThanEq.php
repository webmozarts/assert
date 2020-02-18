<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function consume(int $value): int
{
    Assert::greaterThanEq($value, 1);

    return $value;
}
