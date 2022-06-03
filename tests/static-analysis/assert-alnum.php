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
function allAlnum(iterable $value): iterable
{
    Assert::allAlnum($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 *
 * @return iterable<string|null>
 */
function allNullOrAlnum(iterable $value): iterable
{
    Assert::allNullOrAlnum($value);

    return $value;
}
