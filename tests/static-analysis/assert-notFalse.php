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
function notFalseUnion($value): string
{
    Assert::notFalse($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return mixed
 */
function nullOrNotFalse($value)
{
    Assert::nullOrNotFalse($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return mixed
 */
function allNotFalse($value)
{
    Assert::allNotFalse($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return mixed
 */
function allNullOrNotFalse($value)
{
    Assert::allNullOrNotFalse($value);

    return $value;
}
