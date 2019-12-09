<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 *
 * @return array<string, mixed>
 */
function consume($value): array
{
    Assert::isNonEmptyMap($value);

    return $value;
}

/**
 * Verifying that the type of the elements in the array is preserved by the assertion
 *
 * @param array<int|string, \stdClass> $value
 *
 * @return array<string, \stdClass>
 */
function consumeWithSpecificValueType(array $value): array
{
    Assert::isNonEmptyMap($value);

    return $value;
}
