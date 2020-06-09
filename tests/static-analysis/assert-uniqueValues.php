<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

function uniqueValues(array $values): array
{
    Assert::uniqueValues($values);

    return $values;
}

function nullOrUniqueValues(?array $values): ?array
{
    Assert::nullOrUniqueValues($values);

    return $values;
}

/**
 * @param iterable<array> $values
 *
 * @return iterable<array>
 */
function allUniqueValues(iterable $values): iterable
{
    Assert::allUniqueValues($values);

    return $values;
}
