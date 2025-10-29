<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function boolean(mixed $value): bool
{
    Assert::boolean($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrBoolean(mixed $value): ?bool
{
    Assert::nullOrBoolean($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allBoolean(mixed $value): iterable
{
    Assert::allBoolean($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrBoolean(mixed $value): iterable
{
    Assert::allNullOrBoolean($value);

    return $value;
}
