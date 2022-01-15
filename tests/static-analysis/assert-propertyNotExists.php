<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param class-string|object $classOrObject
 * @param mixed $property
 *
 * @return class-string|object
 */
function propertyNotExists($classOrObject, $property)
{
    Assert::propertyNotExists($classOrObject, $property);

    return $classOrObject;
}

/**
 * @psalm-pure
 *
 * @param null|class-string|object $classOrObject
 * @param mixed $property
 *
 * @return null|class-string|object
 */
function nullOrPropertyNotExists($classOrObject, $property)
{
    Assert::nullOrPropertyNotExists($classOrObject, $property);

    return $classOrObject;
}

/**
 * @psalm-pure
 *
 * @param iterable<class-string|object> $classOrObject
 * @param mixed $property
 *
 * @return iterable<class-string|object>
 */
function allPropertyNotExists(iterable $classOrObject, $property): iterable
{
    Assert::allPropertyNotExists($classOrObject, $property);

    return $classOrObject;
}

/**
 * @psalm-pure
 *
 * @param iterable<class-string|object|null> $classOrObject
 * @param mixed $property
 *
 * @return iterable<class-string|object|null>
 */
function allNullOrPropertyNotExists(iterable $classOrObject, $property): iterable
{
    Assert::allNullOrPropertyNotExists($classOrObject, $property);

    return $classOrObject;
}
