<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 * @param mixed $expect
 */
function notEq($value, $expect): mixed
{
    Assert::notEq($value, $expect);

    return $value;
}

/**
 * @param mixed $value
 * @param mixed $expect
 */
function nullOrNotEq($value, $expect): mixed
{
    Assert::nullOrNotEq($value, $expect);

    return $value;
}

/**
 * @param mixed $value
 * @param mixed $expect
 */
function allNotEq($value, $expect): mixed
{
    Assert::allNotEq($value, $expect);

    return $value;
}

/**
 * @param mixed $value
 * @param mixed $expect
 */
function allNullOrNotEq($value, $expect): mixed
{
    Assert::allNullOrNotEq($value, $expect);

    return $value;
}
