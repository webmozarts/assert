<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @param mixed $min
 * @param mixed $max
 */
function range(mixed $value, $min, $max): mixed
{
    return Assert::range($value, $min, $max);
}

/**
 * @psalm-pure
 * @param mixed $min
 * @param mixed $max
 */
function nullOrRange(mixed $value, $min, $max): mixed
{
    return Assert::nullOrRange($value, $min, $max);
}

/**
 * @psalm-pure
 * @param mixed $min
 * @param mixed $max
 */
function allRange(mixed $value, $min, $max): mixed
{
    return Assert::allRange($value, $min, $max);
}

/**
 * @psalm-pure
 * @param mixed $min
 * @param mixed $max
 */
function allNullOrRange(mixed $value, $min, $max): mixed
{
    return Assert::allNullOrRange($value, $min, $max);
}
