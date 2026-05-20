<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param class-string|object $classOrObject
 * @param mixed $method
 */
function methodNotExists(mixed $classOrObject, $method): string|object
{
    Assert::methodNotExists($classOrObject, $method);

    return $classOrObject;
}

/**
 * @psalm-pure
 *
 * @param null|class-string|object $classOrObject
 * @param mixed $method
 */
function nullOrMethodNotExists(mixed $classOrObject, $method): string|object|null
{
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
