<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param class-string|object $classOrObject
 * @param mixed $method
 *
 * @return class-string|object
 */
function methodNotExists($classOrObject, $method)
{
    Assert::methodNotExists($classOrObject, $method);

    return $classOrObject;
}

/**
 * @psalm-pure
 *
 * @param null|class-string|object $classOrObject
 * @param mixed $method
 *
 * @return null|class-string|object
 */
function nullOrMethodNotExists($classOrObject, $method)
{
    Assert::nullOrMethodNotExists($classOrObject, $method);

    return $classOrObject;
}

/**
 * @psalm-pure
 *
 * @param iterable<class-string|object> $classOrObject
 * @param mixed $method
 *
 * @return iterable<class-string|object>
 */
function allMethodNotExists(iterable $classOrObject, $method): iterable
{
    Assert::allMethodNotExists($classOrObject, $method);

    return $classOrObject;
}

/**
 * @psalm-pure
 *
 * @param iterable<class-string|object|null> $classOrObject
 * @param mixed $method
 *
 * @return iterable<class-string|object|null>
 */
function allNullOrMethodNotExists(iterable $classOrObject, $method): iterable
{
    Assert::allNullOrMethodNotExists($classOrObject, $method);

    return $classOrObject;
}
