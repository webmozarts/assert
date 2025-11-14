<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function scalar(mixed $value): int|float|string|bool
{
    Assert::scalar($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrScalar(mixed $value): int|float|string|bool|null
{
    Assert::nullOrScalar($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allScalar(mixed $value): iterable
{
    Assert::allScalar($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrScalar(mixed $value): iterable
{
    Assert::allNullOrScalar($value);

    return $value;
}
