<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function isCallable(mixed $value): callable
{
    return Assert::isCallable($value);
}

/**
 * @psalm-pure
 */
function nullOrIsCallable(mixed $value): ?callable
{
    return Assert::nullOrIsCallable($value);
}

/**
 * @psalm-pure
 */
function allIsCallable(mixed $value): iterable
{
    return Assert::allIsCallable($value);
}

/**
 * @psalm-pure
 */
function allNullOrIsCallable(mixed $value): iterable
{
    return Assert::allNullOrIsCallable($value);
}
