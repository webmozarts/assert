<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function isEmptyNullableObject(?object $value): null
{
    return Assert::isEmpty($value);
}

/**
 * @psalm-pure
 *
 * @return ""|"0"
 */
function isEmptyString(string $value)
{
    return Assert::isEmpty($value);
}

/**
 * @psalm-pure
 *
 * @return (0)
 */
function isEmptyInt(int $value)
{
    return Assert::isEmpty($value);
}

/**
 * @psalm-pure
 *
 * @return false
 */
function isEmptyBool(bool $value)
{
    return Assert::isEmpty($value);
}

/**
 * @psalm-pure
 *
 * @return array<empty, empty>
 */
function isEmptyArray(array $value)
{
    return Assert::isEmpty($value);
}

/**
 * @psalm-pure
 *
 * @return null
 */
function nullOrIsEmpty(?object $value): null
{
    return Assert::nullOrIsEmpty($value);
}

/**
 * @psalm-pure
 */
function allIsEmpty(mixed $value): iterable
{
    return Assert::allIsEmpty($value);
}

/**
 * @psalm-pure
 */
function allNullOrIsEmpty(mixed $value): iterable
{
    return Assert::allNullOrIsEmpty($value);
}
