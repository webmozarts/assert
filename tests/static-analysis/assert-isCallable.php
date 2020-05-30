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
