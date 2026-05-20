<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @param mixed $limit
 */
function lessThan(mixed $value, mixed $limit): mixed
{
    Assert::lessThan($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function nullOrLessThan(mixed $value, mixed $limit): mixed
{
    Assert::nullOrLessThan($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function allLessThan(mixed $value, mixed $limit): mixed
{
    Assert::allLessThan($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function allNullOrLessThan(mixed $value, mixed $limit): mixed
{
    Assert::allNullOrLessThan($value, $limit);

    return $value;
}
