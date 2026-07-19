<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use stdClass;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return non-empty-list<stdClass>
 */
function isNonEmptyListOf(mixed $value): array
{
    Assert::isNonEmptyListOf($value, stdClass::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return null|non-empty-list<stdClass>
 */
function nullOrIsNonEmptyListOf(mixed $value): ?array
{
    Assert::nullOrIsNonEmptyListOf($value, stdClass::class);

    return $value;
}

/**
 * @psalm-pure
 */
function allIsNonEmptyListOf(mixed $value): iterable
{
    Assert::allIsNonEmptyListOf($value, stdClass::class);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrIsNonEmptyListOf(mixed $value): iterable
{
    Assert::allNullOrIsNonEmptyListOf($value, stdClass::class);

    return $value;
}
