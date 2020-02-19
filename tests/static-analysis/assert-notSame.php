<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function consume(string $value): string
{
    Assert::notSame($value, 'foo');

    return $value;
}
