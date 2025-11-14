<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use stdClass;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return non-empty-array<string, mixed>
 */
function isNonEmptyMap(mixed $value): array
{
    Assert::isNonEmptyMap($value);

    return $value;
}

/**
 * Verifying that the type of the elements in the array is preserved by the assertion
 *
 * @psalm-pure
 *
 * @param array<int|string, stdClass> $value
 *
 * @return array<string, stdClass>
 */
function isNonEmptyMapWithKnownType(array $value): array
{
    Assert::isNonEmptyMap($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrIsNonEmptyMap(mixed $value): mixed
{
    Assert::nullOrIsNonEmptyMap($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<mixed|array<mixed>> $value
 */
function allIsNonEmptyMap(iterable $value): iterable
{
    Assert::allIsNonEmptyMap($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<mixed|array<mixed>> $value
 */
function allNullOrIsNonEmptyMap(iterable $value): iterable
{
    Assert::allNullOrIsNonEmptyMap($value);

    return $value;
}
