<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 *
 * @return class-string
 */
function classExists(mixed $value): string
{
    Assert::classExists($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return class-string|null
 */
function nullOrClassExists(mixed $value): ?string
{
    Assert::nullOrClassExists($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allClassExists(mixed $value): iterable
{
    Assert::allClassExists($value);

    return $value;
}

/**
 * @param mixed $value
 */
function allNullOrClassExists(mixed $value): iterable
{
    Assert::allNullOrClassExists($value);

    return $value;
}
