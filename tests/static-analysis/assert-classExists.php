<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * 
 *
 * @return class-string
 */
function classExists(mixed $value): string
{
    return Assert::classExists($value);
}

/**
 * 
 *
 * @return class-string|null
 */
function nullOrClassExists(mixed $value): ?string
{
    return Assert::nullOrClassExists($value);
}

/**
 * 
 */
function allClassExists(mixed $value): iterable
{
    return Assert::allClassExists($value);
}

/**
 * 
 */
function allNullOrClassExists(mixed $value): iterable
{
    return Assert::allNullOrClassExists($value);
}
