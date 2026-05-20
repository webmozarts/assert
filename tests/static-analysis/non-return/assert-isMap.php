<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use stdClass;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return array<string, mixed>
 */
function isMap(mixed $value): array
{
    Assert::isMap($value);

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
function isMapWithKnownType(array $value): array
{
    Assert::isMap($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return array<empty, empty>
 */
function isMapWithEmptyArray(): array
{
    $value = [];

    Assert::isMap($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return null|array<string, mixed>
 */
function nullOrIsMap(mixed $value): ?array
{
    Assert::nullOrIsMap($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<mixed|array<mixed>> $value
 */
function allIsMap(iterable $value): iterable
{
    Assert::allIsMap($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<mixed|array<mixed>> $value
 */
function allNullOrIsMap(iterable $value): iterable
{
    Assert::allNullOrIsMap($value);

    return $value;
}
