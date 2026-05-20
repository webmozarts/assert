<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function notEmptyNullableObject(?object $value): object
{
    Assert::notEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return non-empty-string
 */
function notEmptyString(string $value)
{
    Assert::notEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return true
 */
function notEmptyBool(bool $value)
{
    Assert::notEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return non-empty-array
 */
function notEmptyArray(array $value)
{
    Assert::notEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrNotEmpty(mixed $value): mixed
{
    Assert::nullOrNotEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allNotEmpty(mixed $value): mixed
{
    Assert::allNotEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrNotEmpty(mixed $value): mixed
{
    Assert::allNullOrNotEmpty($value);

    return $value;
}
