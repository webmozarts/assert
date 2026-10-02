<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param class-string|object $classOrObject
 * @param mixed $property
 * @return class-string|object
 */
function propertyNotExists(mixed $classOrObject, $property): string|object
{
    return Assert::propertyNotExists($classOrObject, $property);
}

/**
 * @psalm-pure
 *
 * @param null|class-string|object $classOrObject
 * @param mixed $property
 * @return null|class-string|object
 */
function nullOrPropertyNotExists(mixed $classOrObject, $property): string|object|null
{
    return Assert::nullOrPropertyNotExists($classOrObject, $property);
}

/**
 * @psalm-pure
 *
 * @param iterable<class-string|object> $classOrObject
 * @param mixed $property
 * @return iterable<class-string|object>
 */
function allPropertyNotExists(iterable $classOrObject, $property): iterable
{
    return Assert::allPropertyNotExists($classOrObject, $property);
}

/**
 * @psalm-pure
 *
 * @param iterable<class-string|object|null> $classOrObject
 * @param mixed $property
 * @return iterable<class-string|object|null>
 */
function allNullOrPropertyNotExists(iterable $classOrObject, $property): iterable
{
    return Assert::allNullOrPropertyNotExists($classOrObject, $property);
}
