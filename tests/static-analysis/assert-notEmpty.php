<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function notEmptyNullableObject(?object $value): object
{
    return Assert::notEmpty($value);
}

/**
 * @psalm-pure
 *
 * @return non-empty-string
 */
function notEmptyString(string $value)
{
    return Assert::notEmpty($value);
}

/**
 * @psalm-pure
 *
 * @return true
 */
function notEmptyBool(bool $value)
{
    return Assert::notEmpty($value);
}

/**
 * @psalm-pure
 *
 * @return non-empty-array
 */
function notEmptyArray(array $value)
{
    return Assert::notEmpty($value);
}

/**
 * @psalm-pure
 */
function nullOrNotEmpty(mixed $value): mixed
{
    return Assert::nullOrNotEmpty($value);
}

/**
 * @psalm-pure
 */
function allNotEmpty(mixed $value): mixed
{
    return Assert::allNotEmpty($value);
}

/**
 * @psalm-pure
 */
function allNullOrNotEmpty(mixed $value): mixed
{
    return Assert::allNullOrNotEmpty($value);
}
