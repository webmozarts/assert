<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function greaterThanEq(mixed $value, mixed $limit): mixed
{
    return Assert::greaterThanEq($value, $limit);
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function nullOrGreaterThanEq(mixed $value, mixed $limit): mixed
{
    return Assert::nullOrGreaterThanEq($value, $limit);
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function allGreaterThanEq(mixed $value, mixed $limit): mixed
{
    return Assert::allGreaterThanEq($value, $limit);
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function allNullOrGreaterThanEq(mixed $value, mixed $limit): mixed
{
    return Assert::allNullOrGreaterThanEq($value, $limit);
}
