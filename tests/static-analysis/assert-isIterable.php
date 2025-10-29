<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function isIterable(mixed $value): iterable
{
    Assert::isIterable($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrIsIterable(mixed $value): ?iterable
{
    Assert::nullOrIsIterable($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allIsIterable(mixed $value): iterable
{
    Assert::allIsIterable($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrIsIterable(mixed $value): iterable
{
    Assert::allNullOrIsIterable($value);

    return $value;
}
