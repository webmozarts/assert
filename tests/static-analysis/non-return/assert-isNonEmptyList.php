<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return non-empty-list<mixed>
 */
function isNonEmptyList(mixed $value): array
{
    Assert::isNonEmptyList($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param array<int> $value
 */
function isNonEmptyListWithRange(array $value): array
{
    Assert::isNonEmptyList($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return null|non-empty-list<mixed>
 */
function nullOrIsNonEmptyList(mixed $value): ?array
{
    Assert::nullOrIsNonEmptyList($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allIsNonEmptyList(mixed $value): iterable
{
    Assert::allIsNonEmptyList($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrIsNonEmptyList(mixed $value): iterable
{
    Assert::allNullOrIsNonEmptyList($value);

    return $value;
}
