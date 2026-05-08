<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

function uniqueValues(mixed $values): array
{
    return Assert::uniqueValues($values);
}

function nullOrUniqueValues(mixed $values): ?array
{
    return Assert::nullOrUniqueValues($values);
}

/**
 * @return iterable<array>
 */
function allUniqueValues(iterable $values): iterable
{
    return Assert::allUniqueValues($values);
}

/**
 * @return iterable<array|null>
 */
function allNullOrUniqueValues(iterable $values): iterable
{
    return Assert::allNullOrUniqueValues($values);
}
