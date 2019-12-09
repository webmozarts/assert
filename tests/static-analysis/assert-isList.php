<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-param mixed $value
 *
 * @psalm-return list<mixed>
 */
function consume($value): array
{
    Assert::isList($value);

    return $value;
}

/**
 * @psalm-param array<\stdClass> $value
 *
 * @psalm-return list<\stdClass>
 */
function consumeWithPreciseItemType(array $value): array
{
    Assert::isList($value);

    return $value;
}
