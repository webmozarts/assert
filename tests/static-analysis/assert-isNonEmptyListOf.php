<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use stdClass;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return non-empty-list<stdClass>
 */
function isNonEmptyListOf(mixed $value): array
{
    return Assert::isNonEmptyListOf($value, stdClass::class);
}

/**
 * @psalm-pure
 *
 * @return null|non-empty-list<stdClass>
 */
function nullOrIsNonEmptyListOf(mixed $value): ?array
{
    return Assert::nullOrIsNonEmptyListOf($value, stdClass::class);
}

/**
 * @psalm-pure
 */
function allIsNonEmptyListOf(mixed $value): iterable
{
    return Assert::allIsNonEmptyListOf($value, stdClass::class);
}

/**
 * @psalm-pure
 */
function allNullOrIsNonEmptyListOf(mixed $value): iterable
{
    return Assert::allNullOrIsNonEmptyListOf($value, stdClass::class);
}
