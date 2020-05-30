<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @psalm-template T of object
 *
 * @param mixed $value
 * @psalm-param class-string<T> $class
 *
 * @return T
 */
function isInstanceOf($value, $class)
{
    Assert::isInstanceOf($value, $class);

    return $value;
}

/**
 * @psalm-pure
 * @psalm-template T of object
 *
 * @param mixed $value
 * @psalm-param class-string<T> $class
 *
 * @return null|T
 */
function nullOrIsInstanceOf($value, $class)
{
    Assert::nullOrIsInstanceOf($value, $class);

    return $value;
}

/**
 * @psalm-pure
 * @psalm-template T of object
 *
 * @param mixed $value
 * @psalm-param class-string<T> $class
 *
 * @return iterable<T>
 */
function allIsInstanceOf($value, $class)
{
    Assert::allIsInstanceOf($value, $class);

    return $value;
}
