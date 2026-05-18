<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use stdClass;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return array<string, mixed>
 */
function isMap(mixed $value): array
{
    return Assert::isMap($value);
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
function isMapWithKnownType(array $value): array
{
    return Assert::isMap($value);
}

/**
 * @psalm-pure
 *
 * @return array<empty, empty>
 */
function isMapWithEmptyArray(): array
{
    $value = [];

    return Assert::isMap($value);
}

/**
 * @psalm-pure
 *
 * @return null|array<string, mixed>
 */
function nullOrIsMap(mixed $value): ?array
{
    return Assert::nullOrIsMap($value);
}

/**
 * @psalm-pure
 *
 * @param iterable<mixed|array<mixed>> $value
 */
function allIsMap(iterable $value): iterable
{
    return Assert::allIsMap($value);
}

/**
 * @psalm-pure
 *
 * @param iterable<mixed|array<mixed>> $value
 */
function allNullOrIsMap(iterable $value): iterable
{
    return Assert::allNullOrIsMap($value);
}
