<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
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
 * @return null|false
 */
function nullOrFalse(mixed $value): ?bool
{
    Assert::nullOrFalse($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allFalse(mixed $value): iterable
{
    Assert::allFalse($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrFalse(mixed $value): iterable
{
    Assert::allFalse($value);

    return $value;
}
