<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @param mixed $limit
 */
function greaterThan(mixed $value, $limit): mixed
{
    Assert::greaterThan($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function nullOrGreaterThan(mixed $value, mixed $limit): mixed
{
    Assert::nullOrGreaterThan($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function allGreaterThan(mixed $value, mixed $limit): mixed
{
    Assert::allGreaterThan($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function allNullOrGreaterThan(mixed $value, mixed $limit): mixed
{
    Assert::allNullOrGreaterThan($value, $limit);

    return $value;
}
