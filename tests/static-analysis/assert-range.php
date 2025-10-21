<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $min
 * @param mixed $max
 */
function range($value, $min, $max): mixed
{
    Assert::range($value, $min, $max);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $min
 * @param mixed $max
 */
function nullOrRange($value, $min, $max): mixed
{
    Assert::nullOrRange($value, $min, $max);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $min
 * @param mixed $max
 */
function allRange($value, $min, $max): mixed
{
    Assert::allRange($value, $min, $max);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param mixed $min
 * @param mixed $max
 */
function allNullOrRange($value, $min, $max): mixed
{
    Assert::allNullOrRange($value, $min, $max);

    return $value;
}
