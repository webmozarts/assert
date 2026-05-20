<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function scalar(mixed $value): int|float|string|bool
{
    return Assert::scalar($value);
}

/**
 * @psalm-pure
 */
function nullOrScalar(mixed $value): int|float|string|bool|null
{
    return Assert::nullOrScalar($value);
}

/**
 * @psalm-pure
 */
function allScalar(mixed $value): iterable
{
    return Assert::allScalar($value);
}

/**
 * @psalm-pure
 */
function allNullOrScalar(mixed $value): iterable
{
    return Assert::allNullOrScalar($value);
}
