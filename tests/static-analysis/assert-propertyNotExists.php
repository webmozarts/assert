<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param class-string|object $classOrObject
 * @param mixed $property
 */
function propertyNotExists($classOrObject, $property): string|object {
    Assert::propertyNotExists($classOrObject, $property);

    return $classOrObject;
}

/**
 * @psalm-pure
 *
 * @param null|class-string|object $classOrObject
 * @param mixed $property
 */
function nullOrPropertyNotExists($classOrObject, $property): null|string|object {
    Assert::nullOrPropertyNotExists($classOrObject, $property);

    return $classOrObject;
}

/**
 * @psalm-pure
 *
 * @param iterable<class-string|object> $classOrObject
 * @param mixed $property
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
 */
function allNullOrPropertyNotExists(iterable $classOrObject, $property): iterable
{
    Assert::allNullOrPropertyNotExists($classOrObject, $property);

    return $classOrObject;
}
