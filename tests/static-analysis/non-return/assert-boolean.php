<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function boolean(mixed $value): bool
{
    Assert::boolean($value);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrBoolean(mixed $value): ?bool
{
    Assert::nullOrBoolean($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allBoolean(mixed $value): iterable
{
    Assert::allBoolean($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrBoolean(mixed $value): iterable
{
    Assert::allNullOrBoolean($value);

    return $value;
}
