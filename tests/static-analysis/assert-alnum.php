<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function alnum(string $value): string
{
    Assert::alnum($value);

    return $value;
}

/**
 * @psalm-pure
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
function allAllnum(iterable $value): iterable
{
    Assert::allAlnum($value);

    return $value;
}
