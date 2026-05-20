<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function isCallable(mixed $value): callable
{
    Assert::isCallable($value);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrIsCallable(mixed $value): ?callable
{
    Assert::nullOrIsCallable($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allIsCallable(mixed $value): iterable
{
    Assert::allIsCallable($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrIsCallable(mixed $value): iterable
{
    Assert::allNullOrIsCallable($value);

    return $value;
}
