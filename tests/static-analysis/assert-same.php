<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $expect
 */
function same($value, $expect): mixed
{
    Assert::same($value, $expect);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $expect
 */
function nullOrSame($value, $expect): mixed
{
    Assert::nullOrSame($value, $expect);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $expect
 */
function allSame($value, $expect): mixed
{
    Assert::allSame($value, $expect);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $expect
 */
function allNullOrSame($value, $expect): mixed
{
    Assert::allNullOrSame($value, $expect);

    return $value;
}
