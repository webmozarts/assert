<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function integer(mixed $value): int
{
    return Assert::integer($value);
}

/**
 * @psalm-pure
 */
function nullOrInteger(mixed $value): ?int
{
    return Assert::nullOrInteger($value);
}

/**
 * @psalm-pure
 */
function allInteger(mixed $value): iterable
{
    return Assert::allInteger($value);
}

/**
 * @psalm-pure
 */
function allNullOrInteger(mixed $value): iterable
{
    return Assert::allNullOrInteger($value);
}
