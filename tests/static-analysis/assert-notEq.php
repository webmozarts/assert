<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

function consume(string $value): string
{
    Assert::notEq($value, 'foo');

    return $value;
}
