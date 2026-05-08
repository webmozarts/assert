<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @param mixed $limit
 */
function lessThanEq(mixed $value, mixed $limit): mixed
{
    return Assert::lessThanEq($value, $limit);
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function nullOrLessThanEq(mixed $value, mixed $limit): mixed
{
    return Assert::nullOrLessThanEq($value, $limit);
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function allLessThanEq(mixed $value, mixed $limit): mixed
{
    return Assert::allLessThanEq($value, $limit);
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function allNullOrLessThanEq(mixed $value, mixed $limit): mixed
{
    return Assert::allNullOrLessThanEq($value, $limit);
}
