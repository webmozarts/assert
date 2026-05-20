<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @param mixed $expect
 */
function eq(mixed $value, mixed $expect): mixed
{
    Assert::eq($value, $expect);

    return $value;
}

/**
 * @param mixed $expect
 */
function nullOrEq(mixed $value, mixed $expect): mixed
{
    Assert::nullOrEq($value, $expect);

    return $value;
}

/**
 * @param mixed $expect
 */
function allEq(mixed $value, mixed $expect): mixed
{
    Assert::allEq($value, $expect);

    return $value;
}

/**
 * @param mixed $expect
 */
function allNullOrEq(mixed $value, mixed $expect): mixed
{
    Assert::allNullOrEq($value, $expect);

    return $value;
}
