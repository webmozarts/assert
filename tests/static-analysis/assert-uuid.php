<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function uuid(string $value): string
{
    return Assert::uuid($value);
}

/**
 * @psalm-pure
 */
function nullOrUuid(?string $value): ?string
{
    return Assert::nullOrUuid($value);
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 */
function allUuid(iterable $value): iterable
{
    return Assert::allUuid($value);
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 */
function allNullOrUuid(iterable $value): iterable
{
    return Assert::allNullOrUuid($value);
}
