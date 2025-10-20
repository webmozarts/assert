<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function isIterable($value): iterable
{
    Assert::isIterable($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrIsIterable($value): ?iterable
{
    Assert::nullOrIsIterable($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allIsIterable($value): iterable
{
    Assert::allIsIterable($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrIsIterable($value): iterable
{
    Assert::allNullOrIsIterable($value);

    return $value;
}
