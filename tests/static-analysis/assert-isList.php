<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
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
 * @psalm-pure
 *
 * @psalm-param array<\stdClass> $value
 *
 * @psalm-return list<\stdClass>
 */
function consumeWithPreciseItemType(array $value): array
{
    Assert::isList($value);

    return $value;
}
