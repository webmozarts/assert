<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $limit
 */
function greaterThanEq($value, $limit): mixed
{
    Assert::greaterThanEq($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $limit
 */
function nullOrGreaterThanEq($value, $limit): mixed
{
    Assert::nullOrGreaterThanEq($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $limit
 */
function allGreaterThanEq($value, $limit): mixed
{
    Assert::allGreaterThanEq($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $limit
 */
function allNullOrGreaterThanEq($value, $limit): mixed
{
    Assert::allNullOrGreaterThanEq($value, $limit);

    return $value;
}
