<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function float(mixed $value): float
{
    return Assert::float($value);
}

/**
 * @psalm-pure
 */
function nullOrFloat(mixed $value): ?float
{
    return Assert::nullOrFloat($value);
}

/**
 * @psalm-pure
 */
function allFloat(mixed $value): iterable
{
    return Assert::allFloat($value);
}

/**
 * @psalm-pure
 */
function allNullOrFloat(mixed $value): iterable
{
    return Assert::allNullOrFloat($value);
}
