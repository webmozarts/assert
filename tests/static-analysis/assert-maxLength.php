<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param int|float $max
 */
function maxLength(string $value, $max): string
{
    Assert::maxLength($value, $max);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param int|float $max
 */
function nullOrMaxLength(?string $value, $max): ?string
{
    Assert::nullOrMaxLength($value, $max);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 * @param int|float $max
 *
 * @return iterable<string>
 */
function allMaxLength(iterable $value, $max): iterable
{
    Assert::allMaxLength($value, $max);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 * @param int|float $max
 *
 * @return iterable<string|null>
 */
function allNullOrMaxLength(iterable $value, $max): iterable
{
    Assert::allMaxLength($value, $max);

    return $value;
}
