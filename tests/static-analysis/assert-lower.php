<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return lowercase-string
 */
function lower(string $value): string
{
    Assert::lower($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return null|lowercase-string
 */
function nullOrLower(?string $value): ?string
{
    Assert::nullOrLower($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 *
 * @return iterable<lowercase-string>
 */
function allLower(iterable $value): iterable
{
    Assert::allLower($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 *
 * @return iterable<lowercase-string|null>
 */
function allNullOrLower(iterable $value): iterable
{
    Assert::allNullOrLower($value);

    return $value;
}
