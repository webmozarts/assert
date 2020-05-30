<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Serializable;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param object|string $value
 *
 * @psalm-return class-string<Serializable>|Serializable
 */
function isAOf($value)
{
    Assert::isAOf($value, Serializable::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param null|object|string $value
 *
 * @psalm-return null|class-string<Serializable>|Serializable
 */
function nullOrIsAOf($value)
{
    Assert::nullOrIsAOf($value, Serializable::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<object|string> $value
 *
 * @return iterable<class-string<Serializable>|Serializable>
 */
function allIsAOf($value)
{
    Assert::allIsAOf($value, Serializable::class);

    return $value;
}
