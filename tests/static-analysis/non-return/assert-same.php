<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @param mixed $expect
 */
function same(mixed $value, $expect): mixed
{
    Assert::same($value, $expect);

    return $value;
}

/**
 * @psalm-pure
 * @param mixed $expect
 */
function nullOrSame(mixed $value, $expect): mixed
{
    Assert::nullOrSame($value, $expect);

    return $value;
}

/**
 * @psalm-pure
 * @param mixed $expect
 */
function allSame(mixed $value, $expect): mixed
{
    Assert::allSame($value, $expect);

    return $value;
}

/**
 * @psalm-pure
 * @param mixed $expect
 */
function allNullOrSame(mixed $value, $expect): mixed
{
    Assert::allNullOrSame($value, $expect);

    return $value;
}
