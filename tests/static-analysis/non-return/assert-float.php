<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function float(mixed $value): float
{
    Assert::float($value);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrFloat(mixed $value): ?float
{
    Assert::nullOrFloat($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allFloat(mixed $value): iterable
{
    Assert::allFloat($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrFloat(mixed $value): iterable
{
    Assert::allNullOrFloat($value);

    return $value;
}
