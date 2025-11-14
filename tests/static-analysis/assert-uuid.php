<?php

declare(strict_types=1);

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
 */
function allNullOrUuid(iterable $value): iterable
{
    Assert::allNullOrUuid($value);

    return $value;
}
