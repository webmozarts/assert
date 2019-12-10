<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

function consume(?string $value): string
{
    Assert::ipv4($value);

    return $value;
}

function consumeObject(?object $value): object
{
    Assert::ipv4($value);

    return $value;
}

