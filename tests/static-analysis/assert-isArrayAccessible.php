<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use ArrayAccess;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function isArrayAccessible($value): array|ArrayAccess {
    Assert::isArrayAccessible($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrIsArrayAccessible($value): null|array|ArrayAccess {
    Assert::nullOrIsArrayAccessible($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allIsArrayAccessible($value): iterable
{
    Assert::allIsArrayAccessible($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrIsArrayAccessible($value): iterable
{
    Assert::allNullOrIsArrayAccessible($value);

    return $value;
}
