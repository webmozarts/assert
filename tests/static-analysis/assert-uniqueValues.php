<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

function uniqueValues(array $values): array
{
    return Assert::uniqueValues($values);
}

function nullOrUniqueValues(?array $values): ?array
{
    return Assert::nullOrUniqueValues($values);
}

/**
 * @param iterable<array> $values
 */
function allUniqueValues(iterable $values): iterable
{
    return Assert::allUniqueValues($values);
}

/**
 * @param iterable<array|null> $values
 */
function allNullOrUniqueValues(iterable $values): iterable
{
    return Assert::allNullOrUniqueValues($values);
}
