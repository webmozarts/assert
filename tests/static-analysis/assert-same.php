<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @param mixed $expect
 */
function same($value, $expect): mixed
{
    return Assert::same($value, $expect);
}

/**
 * @psalm-pure
 * @param mixed $expect
 */
function nullOrSame($value, $expect): mixed
{
    return Assert::nullOrSame($value, $expect);
}

/**
 * @psalm-pure
 * @param mixed $expect
 */
function allSame($value, $expect): mixed
{
    return Assert::allSame($value, $expect);
}

/**
 * @psalm-pure
 * @param mixed $expect
 */
function allNullOrSame($value, $expect): mixed
{
    return Assert::allNullOrSame($value, $expect);
}
