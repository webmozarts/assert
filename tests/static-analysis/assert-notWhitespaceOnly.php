<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function notWhitespaceOnly(string $value): string
{
    return Assert::notWhitespaceOnly($value);
}

/**
 * @psalm-pure
 */
function nullOrNotWhitespaceOnly(?string $value): ?string
{
    return Assert::nullOrNotWhitespaceOnly($value);
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 * @return iterable<string>
 */
function allNotWhitespaceOnly(iterable $value): iterable
{
    return Assert::allNotWhitespaceOnly($value);
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 * @return iterable<string|null>
 */
function allNullOrNotWhitespaceOnly(iterable $value): iterable
{
    return Assert::allNullOrNotWhitespaceOnly($value);
}
