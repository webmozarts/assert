<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param object $value
 */
function isInitialized(mixed $value, string $property): object
{
    Assert::isInitialized($value, $property);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrIsInitialized(mixed $value, string $property): object
{
    Assert::isInitialized($value, $property);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allIsInitialized(mixed $value, string $property): iterable
{
    Assert::allIsInitialized($value, $property);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrIsInitialized(mixed $value, string $property): iterable
{
    Assert::allNullOrIsInitialized($value, $property);

    return $value;
}
