<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function notStartsWith(string $value, string $prefix): string
{
    Assert::notStartsWith($value, $prefix);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrNotStartsWith(?string $value, string $prefix): ?string
{
    Assert::nullOrNotStartsWith($value, $prefix);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 */
function allNotStartsWith(iterable $value, string $prefix): iterable
{
    Assert::allNotStartsWith($value, $prefix);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 */
function allNullOrNotStartsWith(iterable $value, string $prefix): iterable
{
    Assert::allNullOrNotStartsWith($value, $prefix);

    return $value;
}
