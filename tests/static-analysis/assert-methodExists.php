<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param class-string|object $classOrObject
 * @param mixed $method
 */
function methodExists($classOrObject, $method): string|object {
    Assert::methodExists($classOrObject, $method);

    return $classOrObject;
}

/**
 * @psalm-pure
 *
 * @param null|class-string|object $classOrObject
 * @param mixed $method
 */
function nullOrMethodExists($classOrObject, $method): null|string|object {
    Assert::nullOrMethodExists($classOrObject, $method);

    return $classOrObject;
}

/**
 * @psalm-pure
 *
 * @param iterable<class-string|object> $classOrObject
 * @param mixed $method
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
 */
function allNullOrMethodExists(iterable $classOrObject, $method): iterable
{
    Assert::allNullOrMethodExists($classOrObject, $method);

    return $classOrObject;
}
