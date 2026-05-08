<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use stdClass;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param array<string, mixed> $value
 *
 * @return non-empty-array<string, mixed>
 */
function isNonEmptyMap(array $value): array
{
    Assert::isNonEmptyMap($value);

    return $value;
}

/**
 * Verifying that the type of the elements in the array is preserved by the assertion
 *
 * @psalm-pure
 *
 * @param array<string, stdClass> $value
 *
 * @return non-empty-array<string, stdClass>
 */
function isNonEmptyMapWithKnownType(array $value): array
{
    Assert::isNonEmptyMap($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param array<string, mixed>|null $value
 */
function nullOrIsNonEmptyMap(?array $value): ?array
{
    Assert::nullOrIsNonEmptyMap($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<array<string, mixed>> $value
 */
function allIsNonEmptyMap(iterable $value): iterable
{
    Assert::allIsNonEmptyMap($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<array<string, mixed>|null> $value
 */
function allNullOrIsNonEmptyMap(iterable $value): iterable
{
    Assert::allNullOrIsNonEmptyMap($value);

    return $value;
}
