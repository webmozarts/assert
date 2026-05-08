<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return true
 */
function notFalseBool(bool $value): bool
{
    return Assert::notFalse($value);
}

/**
 * @psalm-pure
 *
 * @param false|string $value
 */
function notFalseUnion(mixed $value): string
{
    return Assert::notFalse($value);
}

/**
 * @psalm-pure
 */
function nullOrNotFalse(mixed $value): mixed
{
    return Assert::nullOrNotFalse($value);
}

/**
 * @psalm-pure
 *
 * @param iterable<mixed> $value
 */
function allNotFalse(iterable $value): iterable
{
    return Assert::allNotFalse($value);
}

/**
 * @psalm-pure
 *
 * @param iterable<mixed|null> $value
 */
function allNullOrNotFalse(iterable $value): iterable
{
    return Assert::allNullOrNotFalse($value);
}
