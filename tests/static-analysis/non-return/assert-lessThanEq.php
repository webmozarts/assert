<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @param mixed $limit
 */
function lessThanEq(mixed $value, mixed $limit): mixed
{
    Assert::lessThanEq($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function nullOrLessThanEq(mixed $value, mixed $limit): mixed
{
    Assert::nullOrLessThanEq($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function allLessThanEq(mixed $value, mixed $limit): mixed
{
    Assert::allLessThanEq($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function allNullOrLessThanEq(mixed $value, mixed $limit): mixed
{
    Assert::allNullOrLessThanEq($value, $limit);

    return $value;
}
