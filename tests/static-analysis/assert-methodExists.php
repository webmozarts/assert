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
function methodExists($classOrObject, $method)
{
    Assert::methodExists($classOrObject, $method);

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
function nullOrMethodExists($classOrObject, $method)
{
    Assert::nullOrMethodExists($classOrObject, $method);

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
function allMethodExists(iterable $classOrObject, $method): iterable
{
    Assert::allMethodExists($classOrObject, $method);

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
function allNullOrMethodExists(iterable $classOrObject, $method): iterable
{
    Assert::allNullOrMethodExists($classOrObject, $method);

    return $classOrObject;
}
