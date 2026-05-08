<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return non-empty-list<mixed>
 */
function isNonEmptyList(mixed $value): array
{
    return Assert::isNonEmptyList($value);
}

/**
 * @psalm-pure
 *
 * @param array<int> $value
 */
function isNonEmptyListWithRange(array $value): array
{
    return Assert::isNonEmptyList($value);
}

/**
 * @psalm-pure
 *
 * @return null|non-empty-list<mixed>
 */
function nullOrIsNonEmptyList(mixed $value): ?array
{
    return Assert::nullOrIsNonEmptyList($value);
}

/**
 * @psalm-pure
 */
function allIsNonEmptyList(mixed $value): iterable
{
    return Assert::allIsNonEmptyList($value);
}

/**
 * @psalm-pure
 */
function allNullOrIsNonEmptyList(mixed $value): iterable
{
    return Assert::allNullOrIsNonEmptyList($value);
}
