<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @param mixed $limit
 */
function greaterThan($value, $limit): mixed
{
    return Assert::greaterThan($value, $limit);
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function nullOrGreaterThan($value, $limit): mixed
{
    return Assert::nullOrGreaterThan($value, $limit);
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function allGreaterThan($value, $limit): mixed
{
    return Assert::allGreaterThan($value, $limit);
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function allNullOrGreaterThan($value, $limit): mixed
{
    return Assert::allNullOrGreaterThan($value, $limit);
}
