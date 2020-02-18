<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-param non-empty-string $value
 *
 * @return non-empty-string
 */
function consume(string $value): string
{
    Assert::directory($value);

    return $value;
}
