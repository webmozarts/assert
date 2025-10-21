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
function isAOf(mixed $value): mixed
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
function nullOrIsAOf(mixed $value): mixed
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
function allIsAOf(mixed $value): iterable
{
    Assert::allIsAOf($value, Serializable::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<object|string|null> $value
 *
 * @return iterable<class-string<Serializable>|Serializable|null>
 */
function allNullOrIsAOf(mixed $value): iterable
{
    Assert::allNullOrIsAOf($value, Serializable::class);

    return $value;
}
