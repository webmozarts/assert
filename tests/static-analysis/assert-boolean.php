<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @psalm-param mixed $value
 */
function consume($value): bool
{
    Assert::boolean($value);

    return $value;
}

/**
 * @psalm-pure
 * @psalm-param mixed $value
 * @return bool|null
 */
function consumeNullOr($value): ?bool
{
    Assert::nullOrBoolean($value);

    return $value;
}

/**
 * @psalm-pure
 * @psalm-param mixed $value
 * @psalm-return iterable<bool>
 */
function consumeAll($value)
{
    Assert::allBoolean($value);

    return $value;
}
