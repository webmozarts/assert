<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Serializable;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function isInstanceOf(mixed $value): Serializable
{
    Assert::isInstanceOf($value, Serializable::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrIsInstanceOf(mixed $value): ?Serializable
{
    Assert::nullOrIsInstanceOf($value, Serializable::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allIsInstanceOf(mixed $value): iterable
{
    Assert::allIsInstanceOf($value, Serializable::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrIsInstanceOf(mixed $value): iterable
{
    Assert::allNullOrIsInstanceOf($value, Serializable::class);

    return $value;
}
