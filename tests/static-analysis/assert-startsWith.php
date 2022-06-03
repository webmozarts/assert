<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function startsWith(string $value, string $prefix): string
{
    Assert::startsWith($value, $prefix);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrStartsWith(?string $value, string $prefix): ?string
{
    Assert::nullOrStartsWith($value, $prefix);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 *
 * @return iterable<string>
 */
function allStartsWith(iterable $value, string $prefix): iterable
{
    Assert::allStartsWith($value, $prefix);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 *
 * @return iterable<string|null>
 */
function allNullOrStartsWith(iterable $value, string $prefix): iterable
{
    Assert::allNullOrStartsWith($value, $prefix);

    return $value;
}
