<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @psalm-param mixed $value
 */
function consume($value): string
{
    Assert::alpha($value);

    return $value;
}

/**
 * @psalm-pure
 */
function consumeNullableString(?string $value): string
{
    Assert::alpha($value);

    return $value;
}
