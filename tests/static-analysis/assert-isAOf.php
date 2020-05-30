<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @psalm-template ExpectedType of object
 *
 * @param object|string $value
 * @param class-string<ExpectedType> $class
 *
 * @psalm-return class-string<ExpectedType>|ExpectedType
 */
function isAOf($value, $class)
{
    Assert::isAOf($value, $class);

    return $value;
}

/**
 * @psalm-pure
 * @psalm-template ExpectedType of object
 *
 * @param null|object|string $value
 * @param class-string<ExpectedType> $class
 *
 * @psalm-return null|class-string<ExpectedType>|ExpectedType
 */
function nullOrIsAOf($value, $class)
{
    Assert::nullOrIsAOf($value, $class);

    return $value;
}

/**
 * @psalm-pure
 * @psalm-template T of object
 *
 * @param iterable<object|string> $value
 * @param class-string<T> $class
 *
 * @return mixed
 */
function allIsAOf($value, $class)
{
    Assert::allIsAOf($value, $class);

    return $value;
}
