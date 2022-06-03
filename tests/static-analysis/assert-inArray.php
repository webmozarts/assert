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
function inArray($value, array $values)
{
    Assert::inArray($value, $values);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return mixed
 */
function nullOrInArray($value, array $values)
{
    Assert::nullOrInArray($value, $values);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return mixed
 */
function allInArray($value, array $values)
{
    Assert::allInArray($value, $values);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return mixed
 */
function allNullOrInArray($value, array $values)
{
    Assert::allNullOrInArray($value, $values);

    return $value;
}
