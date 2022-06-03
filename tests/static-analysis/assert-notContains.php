<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function notContains(string $value, string $subString): string
{
    Assert::notContains($value, $subString);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrNotContains(?string $value, string $subString): ?string
{
    Assert::nullOrNotContains($value, $subString);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 *
 * @return iterable<string>
 */
function allNotContains(iterable $value, string $subString): iterable
{
    Assert::allNotContains($value, $subString);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 *
 * @return iterable<string|null>
 */
function allNullOrNotContains(iterable $value, string $subString): iterable
{
    Assert::allNullOrNotContains($value, $subString);

    return $value;
}
