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
function notOneOf($value, array $values)
{
    Assert::notOneOf($value, $values);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return mixed
 */
function nullOrNotOneOf($value, array $values)
{
    Assert::nullOrNotOneOf($value, $values);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return mixed
 */
function allNotOneOf($value, array $values)
{
    Assert::allNotOneOf($value, $values);

    return $value;
}

