<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function oneOf($value, array $values): mixed
{
    Assert::oneOf($value, $values);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrOneOf($value, array $values): mixed
{
    Assert::nullOrOneOf($value, $values);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allOneOf($value, array $values): mixed
{
    Assert::allOneOf($value, $values);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrOneOf($value, array $values): mixed
{
    Assert::allNullOrOneOf($value, $values);

    return $value;
}
