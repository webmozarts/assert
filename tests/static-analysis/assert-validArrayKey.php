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
function validArrayKey($value)
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
function nullOrValidArrayKey($value)
{
    Assert::nullOrValidArrayKey($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<array-key>
 */
function allValidArrayKey($value): iterable
{
    Assert::allValidArrayKey($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<array-key|null>
 */
function allNullOrValidArrayKey($value): iterable
{
    Assert::allNullOrValidArrayKey($value);

    return $value;
}
