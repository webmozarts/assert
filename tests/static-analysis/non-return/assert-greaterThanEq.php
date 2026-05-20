<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function greaterThanEq(mixed $value, mixed $limit): mixed
{
    Assert::greaterThanEq($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function nullOrGreaterThanEq(mixed $value, mixed $limit): mixed
{
    Assert::nullOrGreaterThanEq($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function allGreaterThanEq(mixed $value, mixed $limit): mixed
{
    Assert::allGreaterThanEq($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function allNullOrGreaterThanEq(mixed $value, mixed $limit): mixed
{
    Assert::allNullOrGreaterThanEq($value, $limit);

    return $value;
}
