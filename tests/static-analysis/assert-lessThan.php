<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $limit
 */
function lessThan($value, $limit): mixed
{
    Assert::lessThan($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $limit
 */
function nullOrLessThan($value, $limit): mixed
{
    Assert::nullOrLessThan($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $limit
 */
function allLessThan($value, $limit): mixed
{
    Assert::allLessThan($value, $limit);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $limit
 */
function allNullOrLessThan($value, $limit): mixed
{
    Assert::allNullOrLessThan($value, $limit);

    return $value;
}
