<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
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
 */
function isNonEmptyListWithRange(): mixed
{
    $value = range(1, 100);

    Assert::isNonEmptyList($value);

    return $value[0];
}

/**
 * @psalm-pure
 *
 * @param mixed $value
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
 *
 * @param mixed $value
 */
function allIsNonEmptyList(mixed $value): iterable
{
    Assert::allIsNonEmptyList($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrIsNonEmptyList(mixed $value): iterable
{
    Assert::allNullOrIsNonEmptyList($value);

    return $value;
}
