<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return array<string, mixed>
 */
function consume($value): array
{
    Assert::isMap($value);

    return $value;
}

/**
 * Verifying that the type of the elements in the array is preserved by the assertion
 *
 * @psalm-pure
 *
 * @param array<int|string, \stdClass> $value
 *
 * @return array<string, \stdClass>
 */
function consumeWithSpecificValueType(array $value): array
{
    Assert::isMap($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param array<int|string, mixed> $value
 *
 * @return array<string, mixed>
 */
function consumeAllowsForEmptyArrays(array $value): array
{
    Assert::isMap($value);
    Assert::isEmpty($value);

    return $value;
}
