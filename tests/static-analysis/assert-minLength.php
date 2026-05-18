<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param int|float $min
 */
function minLength(string $value, $min): string
{
    return Assert::minLength($value, $min);
}

/**
 * @psalm-pure
 *
 * @param int|float $min
 */
function nullOrMinLength(?string $value, $min): ?string
{
    return Assert::nullOrMinLength($value, $min);
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 * @param int|float $min
 */
function allMinLength(iterable $value, $min): iterable
{
    return Assert::allMinLength($value, $min);
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 * @param int|float $min
 */
function allNullOrMinLength(iterable $value, $min): iterable
{
    return Assert::allNullOrMinLength($value, $min);
}
