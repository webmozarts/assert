<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return array-key
 */
function validArrayKey(mixed $value)
{
    Assert::validArrayKey($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return null|array-key
 */
function nullOrValidArrayKey(mixed $value)
{
    Assert::nullOrValidArrayKey($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allValidArrayKey(mixed $value): iterable
{
    Assert::allValidArrayKey($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrValidArrayKey(mixed $value): iterable
{
    Assert::allNullOrValidArrayKey($value);

    return $value;
}
