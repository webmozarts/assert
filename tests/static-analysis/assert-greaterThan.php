<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $limit
 */
function greaterThan($value, $limit): mixed
{
    Assert::greaterThan($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $limit
 */
function nullOrGreaterThan($value, $limit): mixed
{
    Assert::nullOrGreaterThan($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $limit
 */
function allGreaterThan($value, $limit): mixed
{
    Assert::allGreaterThan($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $limit
 */
function allNullOrGreaterThan($value, $limit): mixed
{
    Assert::allNullOrGreaterThan($value, $limit);

    return $value;
}
