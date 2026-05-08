<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @param mixed $expect
 */
function notSame(mixed $value, $expect): mixed
{
    return Assert::notSame($value, $expect);
}

/**
 * @psalm-pure
 * @param mixed $expect
 */
function nullOrNotSame(mixed $value, $expect): mixed
{
    return Assert::nullOrNotSame($value, $expect);
}

/**
 * @psalm-pure
 * @param mixed $expect
 */
function allNotSame(mixed $value, $expect): mixed
{
    return Assert::allNotSame($value, $expect);
}

/**
 * @psalm-pure
 * @param mixed $expect
 */
function allNullOrNotSame(mixed $value, $expect): mixed
{
    return Assert::allNullOrNotSame($value, $expect);
}
