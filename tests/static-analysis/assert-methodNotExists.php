<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param class-string|object $classOrObject
 * @param mixed $method
 */
function methodNotExists(mixed $classOrObject, $method): string|object
{
    return Assert::methodNotExists($classOrObject, $method);
}

/**
 * @psalm-pure
 *
 * @param null|class-string|object $classOrObject
 * @param mixed $method
 */
function nullOrMethodNotExists(mixed $classOrObject, $method): string|object|null
{
    return Assert::nullOrMethodNotExists($classOrObject, $method);
}

/**
 * @psalm-pure
 *
 * @param iterable<class-string|object> $classOrObject
 * @param mixed $method
 */
function allMethodNotExists(iterable $classOrObject, $method): iterable
{
    return Assert::allMethodNotExists($classOrObject, $method);
}

/**
 * @psalm-pure
 *
 * @param iterable<class-string|object|null> $classOrObject
 * @param mixed $method
 */
function allNullOrMethodNotExists(iterable $classOrObject, $method): iterable
{
    return Assert::allNullOrMethodNotExists($classOrObject, $method);
}
