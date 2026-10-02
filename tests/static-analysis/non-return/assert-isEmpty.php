<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return null
 */
function isEmptyNullableObject(?object $value): null
{
    Assert::isEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return ""|"0"
 */
function isEmptyString(string $value)
{
    Assert::isEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return (0)
 */
function isEmptyInt(int $value)
{
    Assert::isEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return false
 */
function isEmptyBool(bool $value)
{
    Assert::isEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return array<empty, empty>
 */
function isEmptyArray(array $value)
{
    Assert::isEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return null
 */
function nullOrIsEmpty(?object $value): null
{
    Assert::nullOrIsEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return iterable<empty>
 */
function allIsEmpty(mixed $value): iterable
{
    Assert::allIsEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return iterable<empty|null>
 */
function allNullOrIsEmpty(mixed $value): iterable
{
    Assert::allNullOrIsEmpty($value);

    return $value;
}
