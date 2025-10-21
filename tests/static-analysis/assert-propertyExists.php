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
function propertyExists($classOrObject, $property): string|object {
    Assert::propertyExists($classOrObject, $property);

    return $classOrObject;
}

/**
 * @psalm-pure
 *
 * @param null|class-string|object $classOrObject
 * @param mixed $property
 */
function nullOrPropertyExists($classOrObject, $property): null|string|object {
    Assert::nullOrPropertyExists($classOrObject, $property);

    return $classOrObject;
}

/**
 * @psalm-pure
 *
 * @param iterable<class-string|object> $classOrObject
 * @param mixed $property
 */
function allPropertyExists(iterable $classOrObject, $property): iterable
{
    Assert::allPropertyExists($classOrObject, $property);

    return $classOrObject;
}

/**
 * @psalm-pure
 *
 * @param iterable<class-string|object|null> $classOrObject
 * @param mixed $property
 */
function allNullOrPropertyExists(iterable $classOrObject, $property): iterable
{
    Assert::allPropertyExists($classOrObject, $property);

    return $classOrObject;
}
