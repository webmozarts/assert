<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param class-string|object $classOrObject
 * @param mixed $method
 */
function methodNotExists($classOrObject, $method): string|object {
    Assert::methodNotExists($classOrObject, $method);

    return $classOrObject;
}

/**
 * @psalm-pure
 *
 * @param null|class-string|object $classOrObject
 * @param mixed $method
 */
function nullOrMethodNotExists($classOrObject, $method): null|string|object {
    Assert::nullOrMethodNotExists($classOrObject, $method);

    return $classOrObject;
}

/**
 * @psalm-pure
 *
 * @param iterable<class-string|object> $classOrObject
 * @param mixed $method
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
 */
function allNullOrMethodNotExists(iterable $classOrObject, $method): iterable
{
    Assert::allNullOrMethodNotExists($classOrObject, $method);

    return $classOrObject;
}
