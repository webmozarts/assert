<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param class-string|object $classOrObject
 * @param mixed $method
 * @return class-string|object
 */
function methodExists(mixed $classOrObject, $method): string|object
{
    return Assert::methodExists($classOrObject, $method);
}

/**
 * @psalm-pure
 *
 * @param null|class-string|object $classOrObject
 * @param mixed $method
 * @return null|class-string|object
 */
function nullOrMethodExists(mixed $classOrObject, $method): string|object|null
{
    return Assert::nullOrMethodExists($classOrObject, $method);
}

/**
 * @psalm-pure
 *
 * @param iterable<class-string|object> $classOrObject
 * @param mixed $method
 * @return iterable<class-string|object>
 */
function allMethodExists(iterable $classOrObject, $method): iterable
{
    return Assert::allMethodExists($classOrObject, $method);
}

/**
 * @psalm-pure
 *
 * @param iterable<class-string|object|null> $classOrObject
 * @param mixed $method
 * @return iterable<class-string|object|null>
 */
function allNullOrMethodExists(iterable $classOrObject, $method): iterable
{
    return Assert::allNullOrMethodExists($classOrObject, $method);
}
