<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function isCallable(mixed $value): callable
{
    Assert::isCallable($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrIsCallable(mixed $value): ?callable
{
    Assert::nullOrIsCallable($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allIsCallable(mixed $value): iterable
{
    Assert::allIsCallable($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrIsCallable(mixed $value): iterable
{
    Assert::allNullOrIsCallable($value);

    return $value;
}
