<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

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
 */
function nullOrNotFalse(mixed $value): mixed
{
    Assert::nullOrNotFalse($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<mixed> $value
 */
function allNotFalse(iterable $value): iterable
{
    Assert::allNotFalse($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<mixed|null> $value
 */
function allNullOrNotFalse(iterable $value): iterable
{
    Assert::allNullOrNotFalse($value);

    return $value;
}
