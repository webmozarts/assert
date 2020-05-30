<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @psalm-param mixed $value
 */
function alpha($value): string
{
    Assert::alpha($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @psalm-param mixed $value
 */
function nullOrAlpha($value): ?string
{
    Assert::nullOrAlpha($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @psalm-param mixed $value
 *
 * @psalm-return iterable<string>
 */
function allAlpha($value)
{
    Assert::allAlpha($value);

    return $value;
}
