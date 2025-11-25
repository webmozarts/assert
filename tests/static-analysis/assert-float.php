<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function float(mixed $value): float
{
    Assert::float($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrFloat(mixed $value): ?float
{
    Assert::nullOrFloat($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allFloat(mixed $value): iterable
{
    Assert::allFloat($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrFloat(mixed $value): iterable
{
    Assert::allNullOrFloat($value);

    return $value;
}
