<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use ArrayAccess;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return array|ArrayAccess
 */
function isArrayAccessible($value)
{
    Assert::isArrayAccessible($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return null|array|ArrayAccess
 */
function nullOrIsArrayAccessible($value)
{
    Assert::nullOrIsArrayAccessible($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<array|ArrayAccess>
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
 *
 * @return iterable<array|ArrayAccess|null>
 */
function allNullOrIsArrayAccessible($value): iterable
{
    Assert::allNullOrIsArrayAccessible($value);

    return $value;
}
