<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function upper(string $value): string
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
 *
 * @return iterable<string>
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
 *
 * @return iterable<string|null>
 */
function allNullOrUpper(iterable $value): iterable
{
    Assert::allNullOrUpper($value);

    return $value;
}
