<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function isIterable(mixed $value): iterable
{
    return Assert::isIterable($value);
}

/**
 * @psalm-pure
 */
function nullOrIsIterable(mixed $value): ?iterable
{
    return Assert::nullOrIsIterable($value);
}

/**
 * @psalm-pure
 */
function allIsIterable(mixed $value): iterable
{
    return Assert::allIsIterable($value);
}

/**
 * @psalm-pure
 */
function allNullOrIsIterable(mixed $value): iterable
{
    return Assert::allNullOrIsIterable($value);
}
