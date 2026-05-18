<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

function uniqueValues(mixed $values): array
{
    Assert::uniqueValues($values);

    return $values;
}

function nullOrUniqueValues(mixed $values): ?array
{
    Assert::nullOrUniqueValues($values);

    return $values;
}

/**
 * @return iterable<array>
 */
function allUniqueValues(iterable $values): iterable
{
    Assert::allUniqueValues($values);

    return $values;
}

/**
 * @return iterable<array|null>
 */
function allNullOrUniqueValues(iterable $values): iterable
{
    Assert::allNullOrUniqueValues($values);

    return $values;
}
