<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function consumeNullableObject(?object $value): object
{
    Assert::notEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return non-empty-string
 */
function consumeString(string $value)
{
    Assert::notEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return true
 */
function consumeBool(bool $value)
{
    Assert::notEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return non-empty-array
 */
function consumeArray(array $value)
{
    Assert::notEmpty($value);

    return $value;
}
