<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function notRegex(string $value, string $pattern): string
{
    Assert::notRegex($value, $pattern);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrNotRegex(?string $value, string $pattern): ?string
{
    Assert::nullOrNotRegex($value, $pattern);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 *
 * @return iterable<string>
 */
function allNotRegex(iterable $value, string $pattern): iterable
{
    Assert::allNotRegex($value, $pattern);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 *
 * @return iterable<string|null>
 */
function allNullOrNotRegex(iterable $value, string $pattern): iterable
{
    Assert::allNotRegex($value, $pattern);

    return $value;
}
