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
function isNonEmptyList($value): array
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
function nullOrIsNonEmptyList($value): ?array
{
    Assert::nullOrIsNonEmptyList($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<non-empty-list<mixed>>
 */
function allIsNonEmptyList($value): iterable
{
    Assert::allIsNonEmptyList($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<non-empty-list<mixed>|null>
 */
function allNullOrIsNonEmptyList($value): iterable
{
    Assert::allNullOrIsNonEmptyList($value);

    return $value;
}
