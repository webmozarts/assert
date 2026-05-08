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
function propertyExists($classOrObject, $property): string|object
{
    return Assert::propertyExists($classOrObject, $property);
}

/**
 * @psalm-pure
 *
 * @param null|class-string|object $classOrObject
 * @param mixed $property
 */
function nullOrPropertyExists($classOrObject, $property): string|object|null
{
    return Assert::nullOrPropertyExists($classOrObject, $property);
}

/**
 * @psalm-pure
 *
 * @param iterable<class-string|object> $classOrObject
 * @param mixed $property
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
 */
function allNullOrPropertyExists(iterable $classOrObject, $property): iterable
{
    return Assert::allNullOrPropertyExists($classOrObject, $property);
}
