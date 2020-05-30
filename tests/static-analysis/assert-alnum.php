<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @psalm-param string $value
 *
 * @psalm-return string
 */
function alnum(string $value): string
{
    Assert::alnum($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param string|null $value
 *
 * @return string|null
 */
function nullOrAlnum(?string $value): ?string
{
    Assert::nullOrAlnum($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 *
 * @return iterable<string>
 */
function allAllnum($value)
{
    Assert::allAlnum($value);

    return $value;
}
