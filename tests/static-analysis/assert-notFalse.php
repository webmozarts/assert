<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return true
 */
function notFalseBool(bool $value): bool
{
    Assert::notFalse($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param false|string $value
 */
function notFalseUnion(mixed $value): string
{
    Assert::notFalse($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrNotFalse(mixed $value): mixed
{
    Assert::nullOrNotFalse($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNotFalse(mixed $value): mixed
{
    Assert::allNotFalse($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrNotFalse(mixed $value): mixed
{
    Assert::allNullOrNotFalse($value);

    return $value;
}
