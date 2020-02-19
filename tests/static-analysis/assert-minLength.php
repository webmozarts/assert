<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @psalm-param non-empty-string $value
 *
 * @param int|float $minLength
 *
 * @psalm-return non-empty-string
 */
function consume(string $value, $minLength): string
{
    Assert::minLength($value, $minLength);

    return $value;
}
