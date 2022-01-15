<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 *
 * @return class-string
 */
function interfaceExists($value): string
{
    Assert::interfaceExists($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return null|class-string
 */
function nullOrInterfaceExists($value): ?string
{
    Assert::nullOrInterfaceExists($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return iterable<class-string>
 */
function allInterfaceExists($value): iterable
{
    Assert::allInterfaceExists($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return iterable<class-string|null>
 */
function allNullOrInterfaceExists($value): iterable
{
    Assert::allNullOrInterfaceExists($value);

    return $value;
}
