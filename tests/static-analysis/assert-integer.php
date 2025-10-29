<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function integer(mixed $value): int
{
    Assert::integer($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrInteger(mixed $value): ?int
{
    Assert::nullOrInteger($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allInteger(mixed $value): iterable
{
    Assert::allInteger($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrInteger(mixed $value): iterable
{
    Assert::allNullOrInteger($value);

    return $value;
}
