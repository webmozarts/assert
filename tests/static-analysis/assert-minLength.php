<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param int|float $min
 */
function minLength(string $value, $min): string
{
    Assert::minLength($value, $min);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param int|float $min
 */
function nullOrMinLength(?string $value, $min): ?string
{
    Assert::nullOrMinLength($value, $min);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 * @param int|float $min
 *
 * @return iterable<string>
 */
function allMinLength(iterable $value, $min): iterable
{
    Assert::allMinLength($value, $min);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 * @param int|float $min
 *
 * @return iterable<string|null>
 */
function allNullOrMinLength(iterable $value, $min): iterable
{
    Assert::allNullOrMinLength($value, $min);

    return $value;
}
