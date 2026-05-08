<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @param mixed $limit
 */
function greaterThanEq($value, $limit): mixed
{
    return Assert::greaterThanEq($value, $limit);
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function nullOrGreaterThanEq($value, $limit): mixed
{
    return Assert::nullOrGreaterThanEq($value, $limit);
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function allGreaterThanEq($value, $limit): mixed
{
    return Assert::allGreaterThanEq($value, $limit);
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function allNullOrGreaterThanEq($value, $limit): mixed
{
    return Assert::allNullOrGreaterThanEq($value, $limit);
}
