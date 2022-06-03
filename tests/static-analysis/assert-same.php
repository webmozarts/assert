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
function same($value, $expect)
{
    Assert::same($value, $expect);

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
function nullOrSame($value, $expect)
{
    Assert::nullOrSame($value, $expect);

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
function allSame($value, $expect)
{
    Assert::allSame($value, $expect);

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
function allNullOrSame($value, $expect)
{
    Assert::allNullOrSame($value, $expect);

    return $value;
}
