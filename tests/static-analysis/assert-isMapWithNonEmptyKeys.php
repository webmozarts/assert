<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return array<non-empty-string, mixed>
 */
function isMapWithNonEmptyKeys($value): array
{
    Assert::isMapWithNonEmptyKeys($value);

    return $value;
}

/**
 * Verifying that the type of the elements in the array is preserved by the assertion
 *
 * @psalm-pure
 *
 * @param array<int|non-empty-string, \stdClass> $value
 *
 * @return array<non-empty-string, \stdClass>
 */
function isMapWithNonEmptyKeysWithKnownType(array $value): array
{
    Assert::isMapWithNonEmptyKeys($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param array<int|string, mixed> $value
 *
 * @return array<empty, empty>
 */
function isMapWithNonEmptyKeysWithEmptyArray(array $value): array
{
    Assert::isMapWithNonEmptyKeys($value);
    Assert::isEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return null|array<string, mixed>
 */
function nullOrIsMapWithNonEmptyKeys($value): ?array
{
    Assert::nullOrIsMapWithNonEmptyKeys($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<mixed|array<mixed>> $value
 *
 * @return iterable<array<string, mixed>>
 */
function allIsMapWithNonEmptyKeys(iterable $value): iterable
{
    Assert::allIsMapWithNonEmptyKeys($value);

    return $value;
}
