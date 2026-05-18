<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return false
 */
function false(mixed $value): bool
{
    return Assert::false($value);
}

/**
 * @psalm-pure
 *
 * @return null|false
 */
function nullOrFalse(mixed $value): ?bool
{
    return Assert::nullOrFalse($value);
}

/**
 * @psalm-pure
 */
function allFalse(mixed $value): iterable
{
    return Assert::allFalse($value);
}

/**
 * @psalm-pure
 */
function allNullOrFalse(mixed $value): iterable
{
    return Assert::allFalse($value);
}
