<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function uuid(string $value): string
{
    Assert::uuid($value);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrUuid(?string $value): ?string
{
    Assert::nullOrUuid($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 *
 * @return iterable<string>
 */
function allUuid(iterable $value): iterable
{
    Assert::allUuid($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 *
 * @return iterable<string|null>
 */
function allNullOrUuid(iterable $value): iterable
{
    Assert::allNullOrUuid($value);

    return $value;
}
