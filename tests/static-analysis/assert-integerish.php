<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return numeric
 */
function integerish(mixed $value)
{
    Assert::integerish($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return null|numeric
 */
function nullOrIntegerish(mixed $value)
{
    Assert::nullOrIntegerish($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allIntegerish(mixed $value): iterable
{
    Assert::allIntegerish($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrIntegerish(mixed $value): iterable
{
    Assert::allNullOrIntegerish($value);

    return $value;
}
