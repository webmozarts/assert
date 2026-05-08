<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
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
 * @return null|numeric
 */
function nullOrIntegerish(mixed $value)
{
    Assert::nullOrIntegerish($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allIntegerish(mixed $value): iterable
{
    Assert::allIntegerish($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrIntegerish(mixed $value): iterable
{
    Assert::allNullOrIntegerish($value);

    return $value;
}
