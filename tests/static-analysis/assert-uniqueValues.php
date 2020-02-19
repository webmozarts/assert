<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

function consume(array $value): array
{
    Assert::uniqueValues($value);

    return $value;
}
