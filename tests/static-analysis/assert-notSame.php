<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $expect
 */
function notSame($value, $expect): mixed
{
    Assert::notSame($value, $expect);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $expect
 */
function nullOrNotSame($value, $expect): mixed
{
    Assert::nullOrNotSame($value, $expect);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $expect
 */
function allNotSame($value, $expect): mixed
{
    Assert::allNotSame($value, $expect);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $expect
 */
function allNullOrNotSame($value, $expect): mixed
{
    Assert::allNullOrNotSame($value, $expect);

    return $value;
}
