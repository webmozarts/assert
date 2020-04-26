<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;


/**
 * @psalm-pure
 *
 * @return null
 */
function consumeNullableObject(?object $value)
{
    Assert::isEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return ""|"0"
 */
function consumeString(string $value)
{
    Assert::isEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return (0)
 */
function consumeInt(int $value)
{
    Assert::isEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return false
 */
function consumeBool(bool $value)
{
    Assert::isEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return array<empty, empty>
 */
function consumeArray(array $value)
{
    Assert::isEmpty($value);

    return $value;
}
