<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function notWhitespaceOnly(string $value): string
{
    Assert::notWhitespaceOnly($value);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrNotWhitespaceOnly(?string $value): ?string
{
    Assert::nullOrNotWhitespaceOnly($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 */
function allNotWhitespaceOnly(iterable $value): iterable
{
    Assert::allNotWhitespaceOnly($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 */
function allNullOrNotWhitespaceOnly(iterable $value): iterable
{
    Assert::allNullOrNotWhitespaceOnly($value);

    return $value;
}
