<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function object(mixed $value): object
{
    return Assert::object($value);
}

/**
 * @psalm-pure
 */
function nullOrObject(mixed $value): ?object
{
    return Assert::nullOrObject($value);
}

/**
 * @psalm-pure
 *
 * @return iterable<object>
 */
function allObject(mixed $value): iterable
{
    return Assert::allObject($value);
}

/**
 * @psalm-pure
 *
 * @return iterable<object|null>
 */
function allNullOrObject(mixed $value): iterable
{
    return Assert::allNullOrObject($value);
}
