<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @param mixed $limit
 */
function greaterThan(mixed $value, $limit): mixed
{
    return Assert::greaterThan($value, $limit);
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function nullOrGreaterThan(mixed $value, mixed $limit): mixed
{
    return Assert::nullOrGreaterThan($value, $limit);
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function allGreaterThan(mixed $value, mixed $limit): mixed
{
    return Assert::allGreaterThan($value, $limit);
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function allNullOrGreaterThan(mixed $value, mixed $limit): mixed
{
    return Assert::allNullOrGreaterThan($value, $limit);
}
