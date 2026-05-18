<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @param mixed $expect
 */
function notSame(mixed $value, $expect): mixed
{
    Assert::notSame($value, $expect);

    return $value;
}

/**
 * @psalm-pure
 * @param mixed $expect
 */
function nullOrNotSame(mixed $value, $expect): mixed
{
    Assert::nullOrNotSame($value, $expect);

    return $value;
}

/**
 * @psalm-pure
 * @param mixed $expect
 */
function allNotSame(mixed $value, $expect): mixed
{
    Assert::allNotSame($value, $expect);

    return $value;
}

/**
 * @psalm-pure
 * @param mixed $expect
 */
function allNullOrNotSame(mixed $value, $expect): mixed
{
    Assert::allNullOrNotSame($value, $expect);

    return $value;
}
