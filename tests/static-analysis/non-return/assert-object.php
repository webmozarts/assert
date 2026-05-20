<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function object(mixed $value): object
{
    Assert::object($value);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrObject(mixed $value): ?object
{
    Assert::nullOrObject($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allObject(mixed $value): iterable
{
    Assert::allObject($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrObject(mixed $value): iterable
{
    Assert::allNullOrObject($value);

    return $value;
}
