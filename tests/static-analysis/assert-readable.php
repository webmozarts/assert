<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

function readable(string $value): string
{
    Assert::readable($value);

    return $value;
}

function nullOrReadable(?string $value): ?string
{
    Assert::nullOrReadable($value);

    return $value;
}

/**
 * @param iterable<string> $value
 *
 * @return iterable<string>
 */
function allReadable(iterable $value): iterable
{
    Assert::allReadable($value);

    return $value;
}

/**
 * @param iterable<string|null> $value
 *
 * @return iterable<string|null>
 */
function allNullOrReadable(iterable $value): iterable
{
    Assert::allNullOrReadable($value);

    return $value;
}
