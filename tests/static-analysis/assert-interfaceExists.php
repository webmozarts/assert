<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 *
 * @return class-string
 */
function interfaceExists(mixed $value): string
{
    Assert::interfaceExists($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return null|class-string
 */
function nullOrInterfaceExists(mixed $value): ?string
{
    Assert::nullOrInterfaceExists($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allInterfaceExists(mixed $value): iterable
{
    Assert::allInterfaceExists($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allNullOrInterfaceExists(mixed $value): iterable
{
    Assert::allNullOrInterfaceExists($value);

    return $value;
}
