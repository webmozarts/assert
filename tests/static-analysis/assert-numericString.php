<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return numeric-string
 */
function numericString($value): string
{
    Assert::numericString($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return numeric-string|null
 */
function nullOrNumericString($value): ?string
{
    Assert::nullOrNumericString($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<numeric-string>
 */
function allNumericString($value): iterable
{
    Assert::allNumericString($value);

    return $value;
}
