<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function isCallable($value): callable
{
    Assert::isCallable($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrIsCallable($value): ?callable
{
    Assert::nullOrIsCallable($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<callable>
 */
function allIsCallable($value): iterable
{
    Assert::allIsCallable($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<callable|null>
 */
function allNullOrIsCallable($value): iterable
{
    Assert::allNullOrIsCallable($value);

    return $value;
}
