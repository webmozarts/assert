<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * 
 *
 * @return class-string
 */
function interfaceExists(mixed $value): string
{
    Assert::interfaceExists($value);

    return $value;
}

/**
 * 
 *
 * @return null|class-string
 */
function nullOrInterfaceExists(mixed $value): ?string
{
    Assert::nullOrInterfaceExists($value);

    return $value;
}

/**
 * 
 */
function allInterfaceExists(mixed $value): iterable
{
    Assert::allInterfaceExists($value);

    return $value;
}

/**
 * 
 */
function allNullOrInterfaceExists(mixed $value): iterable
{
    Assert::allNullOrInterfaceExists($value);

    return $value;
}
