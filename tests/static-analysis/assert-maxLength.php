<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function maxLength(string $value, int $max): string
{
    Assert::maxLength($value, $max);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrMaxLength(?string $value, int $max): ?string
{
    Assert::nullOrMaxLength($value, $max);

    return $value;
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
    Assert::allMaxLength($value, $max);

    return $value;
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
    Assert::allMaxLength($value, $max);

    return $value;
}
