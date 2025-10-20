<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function upper($value): string
{
    Assert::upper($value);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrUpper(?string $value): ?string
{
    Assert::nullOrUpper($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 */
function allUpper(iterable $value): iterable
{
    Assert::allUpper($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 */
function allNullOrUpper(iterable $value): iterable
{
    Assert::allNullOrUpper($value);

    return $value;
}
