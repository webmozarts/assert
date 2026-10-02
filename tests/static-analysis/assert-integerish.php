<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return numeric
 */
function integerish(mixed $value)
{
    return Assert::integerish($value);
}

/**
 * @psalm-pure
 *
 * @return null|numeric
 */
function nullOrIntegerish(mixed $value)
{
    return Assert::nullOrIntegerish($value);
}

/**
 * @psalm-pure
 *
 * @return iterable<numeric>
 */
function allIntegerish(mixed $value): iterable
{
    return Assert::allIntegerish($value);
}

/**
 * @psalm-pure
 *
 * @return iterable<numeric|null>
 */
function allNullOrIntegerish(mixed $value): iterable
{
    return Assert::allNullOrIntegerish($value);
}
