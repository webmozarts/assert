<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function notEmptyNullableObject(?object $value): object
{
    Assert::notEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return non-empty-string
 */
function notEmptyString(string $value)
{
    Assert::notEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return true
 */
function notEmptyBool(bool $value)
{
    Assert::notEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return non-empty-array
 */
function notEmptyArray(array $value)
{
    Assert::notEmpty($value);

    return $value;
}
