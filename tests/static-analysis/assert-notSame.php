<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $expect
 *
 * @return mixed
 */
function notSame($value, $expect)
{
    Assert::notSame($value, $expect);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $expect
 *
 * @return mixed
 */
function nullOrNotSame($value, $expect)
{
    Assert::nullOrNotSame($value, $expect);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $expect
 *
 * @return mixed
 */
function allNotSame($value, $expect)
{
    Assert::allNotSame($value, $expect);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $expect
 *
 * @return mixed
 */
function allNullOrNotSame($value, $expect)
{
    Assert::allNullOrNotSame($value, $expect);

    return $value;
}
