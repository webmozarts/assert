<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function alpha($value): string
{
    Assert::alpha($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrAlpha($value): ?string
{
    Assert::nullOrAlpha($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<string>
 */
function allAlpha(iterable $value): iterable
{
    Assert::allAlpha($value);

    return $value;
}
