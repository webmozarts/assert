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
function notInArray($value, array $values)
{
    Assert::notInArray($value, $values);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return mixed
 */
function nullOrNotInArray($value, array $values)
{
    Assert::nullOrNotInArray($value, $values);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return mixed
 */
function allNotInArray($value, array $values)
{
    Assert::allNotInArray($value, $values);

    return $value;
}
