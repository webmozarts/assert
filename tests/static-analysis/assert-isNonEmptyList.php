<?php

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
