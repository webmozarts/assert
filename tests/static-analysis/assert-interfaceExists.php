<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @return class-string
 */
function interfaceExists(mixed $value): string
{
    return Assert::interfaceExists($value);
}

/**
 * @return null|class-string
 */
function nullOrInterfaceExists(mixed $value): ?string
{
    return Assert::nullOrInterfaceExists($value);
}

/**
 * @return iterable<class-string>
 */
function allInterfaceExists(mixed $value): iterable
{
    return Assert::allInterfaceExists($value);
}

/**
 * @return iterable<class-string|null>
 */
function allNullOrInterfaceExists(mixed $value): iterable
{
    return Assert::allNullOrInterfaceExists($value);
}
