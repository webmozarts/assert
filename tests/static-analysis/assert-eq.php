<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

function consume(string $value): string
{
    Assert::eq($value, 'foo');

    return $value;
}
