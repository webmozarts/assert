<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return mixed
 */
function oneOf($value, array $values)
{
    Assert::oneOf($value, $values);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return mixed
 */
function nullOrOneOf($value, array $values)
{
    Assert::nullOrOneOf($value, $values);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return mixed
 */
function allOneOf($value, array $values)
{
    Assert::allOneOf($value, $values);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return mixed
 */
function allNullOrOneOf($value, array $values)
{
    Assert::allNullOrOneOf($value, $values);

    return $value;
}
