<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function consume(array $value): array
{
    Assert::uniqueValues($value);

    return $value;
}
