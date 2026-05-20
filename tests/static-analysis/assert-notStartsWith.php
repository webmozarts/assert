<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function notStartsWith(string $value, string $prefix): string
{
    return Assert::notStartsWith($value, $prefix);
}

/**
 * @psalm-pure
 */
function nullOrNotStartsWith(?string $value, string $prefix): ?string
{
    return Assert::nullOrNotStartsWith($value, $prefix);
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 */
function allNotStartsWith(iterable $value, string $prefix): iterable
{
    return Assert::allNotStartsWith($value, $prefix);
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 */
function allNullOrNotStartsWith(iterable $value, string $prefix): iterable
{
    return Assert::allNullOrNotStartsWith($value, $prefix);
}
