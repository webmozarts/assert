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
function propertyExists(mixed $classOrObject, $property): string|object
{
    return Assert::propertyExists($classOrObject, $property);
}

/**
 * @psalm-pure
 *
 * @param null|class-string|object $classOrObject
 * @param mixed $property
 * @return null|class-string|object
 */
function nullOrPropertyExists(mixed $classOrObject, $property): string|object|null
{
    return Assert::nullOrPropertyExists($classOrObject, $property);
}

/**
 * @psalm-pure
 *
 * @param iterable<class-string|object> $classOrObject
 * @param mixed $property
 * @return iterable<class-string|object>
 */
function allPropertyExists(iterable $classOrObject, $property): iterable
{
    return Assert::allPropertyExists($classOrObject, $property);
}

/**
 * @psalm-pure
 *
 * @param iterable<class-string|object|null> $classOrObject
 * @param mixed $property
 * @return iterable<class-string|object|null>
 */
function allNullOrPropertyExists(iterable $classOrObject, $property): iterable
{
    return Assert::allNullOrPropertyExists($classOrObject, $property);
}
