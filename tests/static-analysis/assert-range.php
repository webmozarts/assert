<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function consume(int $value): int
{
    Assert::range($value, 1, 10);

    return $value;
}
