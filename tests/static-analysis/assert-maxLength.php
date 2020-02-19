<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @psalm-param non-empty-string $value
 *
 * @param int|float $maxLength
 *
 * @psalm-return non-empty-string
 */
function consume(string $value, $maxLength): string
{
    Assert::maxLength($value, $maxLength);

    return $value;
}
