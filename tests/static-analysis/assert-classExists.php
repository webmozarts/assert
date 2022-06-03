<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 *
 * @return class-string
 */
function classExists($value): string
{
    Assert::classExists($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return class-string|null
 */
function nullOrClassExists($value): ?string
{
    Assert::nullOrClassExists($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return iterable<class-string>
 */
function allClassExists($value): iterable
{
    Assert::allClassExists($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return iterable<class-string|null>
 */
function allNullOrClassExists($value): iterable
{
    Assert::allNullOrClassExists($value);

    return $value;
}
