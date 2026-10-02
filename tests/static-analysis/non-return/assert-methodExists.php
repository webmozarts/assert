<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

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
    Assert::methodExists($classOrObject, $method);

    return $classOrObject;
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
    Assert::nullOrMethodExists($classOrObject, $method);

    return $classOrObject;
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
    Assert::allMethodExists($classOrObject, $method);

    return $classOrObject;
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
    Assert::allNullOrMethodExists($classOrObject, $method);

    return $classOrObject;
}
