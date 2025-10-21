<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return false
 */
function false(mixed $value): bool
{
    Assert::false($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return null|false
 */
function nullOrFalse(mixed $value): ?bool
{
    Assert::nullOrFalse($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allFalse(mixed $value): iterable
{
    Assert::allFalse($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrFalse(mixed $value): iterable
{
    Assert::allFalse($value);

    return $value;
}
