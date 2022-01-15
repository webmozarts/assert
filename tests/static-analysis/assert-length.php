<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function length(string $value, int $length): string
{
    Assert::length($value, $length);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrLength(?string $value, int $length): ?string
{
    Assert::nullOrLength($value, $length);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 *
 * @return iterable<string>
 */
function allLength(iterable $value, int $length): iterable
{
    Assert::allLength($value, $length);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 *
 * @return iterable<string|null>
 */
function allNullOrLength(iterable $value, int $length): iterable
{
    Assert::allNullOrLength($value, $length);

    return $value;
}
