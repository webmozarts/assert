<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @param mixed $limit
 */
function lessThan(mixed $value, mixed $limit): mixed
{
    return Assert::lessThan($value, $limit);
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function nullOrLessThan(mixed $value, mixed $limit): mixed
{
    return Assert::nullOrLessThan($value, $limit);
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function allLessThan(mixed $value, mixed $limit): mixed
{
    return Assert::allLessThan($value, $limit);
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function allNullOrLessThan(mixed $value, mixed $limit): mixed
{
    return Assert::allNullOrLessThan($value, $limit);
}
