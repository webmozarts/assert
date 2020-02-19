<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @psalm-param non-empty-string $value
 *
 * @param int|float $min
 * @param int|float $max
 *
 * @psalm-return non-empty-string
 */
function consume(string $value, $min, $max): string
{
    Assert::lengthBetween($value, $min, $max);

    return $value;
}
