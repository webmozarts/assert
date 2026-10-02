<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function notContains(string $value, string $subString): string
{
    return Assert::notContains($value, $subString);
}

/**
 * @psalm-pure
 */
function nullOrNotContains(?string $value, string $subString): ?string
{
    return Assert::nullOrNotContains($value, $subString);
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 * @return iterable<string>
 */
function allNotContains(iterable $value, string $subString): iterable
{
    return Assert::allNotContains($value, $subString);
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 * @return iterable<string|null>
 */
function allNullOrNotContains(iterable $value, string $subString): iterable
{
    return Assert::allNullOrNotContains($value, $subString);
}
