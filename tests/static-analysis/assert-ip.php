<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

function consume(?string $value): string
{
    Assert::ip($value);

    return $value;
}

function consumeObject(?object $value): object
{
    Assert::ip($value);

    return $value;
}

