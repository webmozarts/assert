<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @param mixed $limit
 */
function lessThan($value, $limit): mixed
{
    return Assert::lessThan($value, $limit);
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function nullOrLessThan($value, $limit): mixed
{
    return Assert::nullOrLessThan($value, $limit);
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function allLessThan($value, $limit): mixed
{
    return Assert::allLessThan($value, $limit);
}

/**
 * @psalm-pure
 * @param mixed $limit
 */
function allNullOrLessThan($value, $limit): mixed
{
    return Assert::allNullOrLessThan($value, $limit);
}
