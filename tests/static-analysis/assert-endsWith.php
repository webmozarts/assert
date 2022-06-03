<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function endsWith(string $value, string $suffix): string
{
    Assert::endsWith($value, $suffix);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrEndsWith(?string $value, string $suffix): ?string
{
    Assert::nullOrEndsWith($value, $suffix);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 *
 * @return iterable<string>
 */
function allEndsWith(iterable $value, string $suffix): iterable
{
    Assert::allEndsWith($value, $suffix);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 *
 * @return iterable<string|null>
 */
function allNullOrEndsWith(iterable $value, string $suffix): iterable
{
    Assert::allNullOrEndsWith($value, $suffix);

    return $value;
}
