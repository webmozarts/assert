<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * 
 *
 * @return class-string
 */
function classExists(mixed $value): string
{
    Assert::classExists($value);

    return $value;
}

/**
 * 
 *
 * @return class-string|null
 */
function nullOrClassExists(mixed $value): ?string
{
    Assert::nullOrClassExists($value);

    return $value;
}

/**
 * 
 */
function allClassExists(mixed $value): iterable
{
    Assert::allClassExists($value);

    return $value;
}

/**
 * 
 */
function allNullOrClassExists(mixed $value): iterable
{
    Assert::allNullOrClassExists($value);

    return $value;
}
