<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @psalm-param non-empty-string $value
 *
 * @psalm-return non-empty-string
 */
function consume(string $value): string
{
    Assert::minLength($value, 0);

    return $value;
}
