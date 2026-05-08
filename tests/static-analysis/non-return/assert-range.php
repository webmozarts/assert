<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @param mixed $min
 * @param mixed $max
 */
function range(mixed $value, $min, $max): mixed
{
    Assert::range($value, $min, $max);

    return $value;
}

/**
 * @psalm-pure
 * @param mixed $min
 * @param mixed $max
 */
function nullOrRange(mixed $value, $min, $max): mixed
{
    Assert::nullOrRange($value, $min, $max);

    return $value;
}

/**
 * @psalm-pure
 * @param mixed $min
 * @param mixed $max
 */
function allRange(mixed $value, $min, $max): mixed
{
    Assert::allRange($value, $min, $max);

    return $value;
}

/**
 * @psalm-pure
 * @param mixed $min
 * @param mixed $max
 */
function allNullOrRange(mixed $value, $min, $max): mixed
{
    Assert::allNullOrRange($value, $min, $max);

    return $value;
}
