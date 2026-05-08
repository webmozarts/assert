<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function maxLength(string $value, int $max): string
{
    return Assert::maxLength($value, $max);
}

/**
 * @psalm-pure
 */
function nullOrMaxLength(?string $value, int $max): ?string
{
    return Assert::nullOrMaxLength($value, $max);
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 *
 * @return iterable<string>
 */
function allMaxLength(iterable $value, int $max): iterable
{
    return Assert::allMaxLength($value, $max);
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 *
 * @return iterable<string|null>
 */
function allNullOrMaxLength(iterable $value, int $max): iterable
{
    return Assert::allMaxLength($value, $max);
}
