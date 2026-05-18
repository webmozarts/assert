<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function integer(mixed $value): int
{
    Assert::integer($value);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrInteger(mixed $value): ?int
{
    Assert::nullOrInteger($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allInteger(mixed $value): iterable
{
    Assert::allInteger($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrInteger(mixed $value): iterable
{
    Assert::allNullOrInteger($value);

    return $value;
}
