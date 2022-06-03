<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Serializable;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function isInstanceOf($value): Serializable
{
    Assert::isInstanceOf($value, Serializable::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrIsInstanceOf($value): ?Serializable
{
    Assert::nullOrIsInstanceOf($value, Serializable::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<Serializable>
 */
function allIsInstanceOf($value): iterable
{
    Assert::allIsInstanceOf($value, Serializable::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<Serializable|null>
 */
function allNullOrIsInstanceOf($value): iterable
{
    Assert::allNullOrIsInstanceOf($value, Serializable::class);

    return $value;
}
