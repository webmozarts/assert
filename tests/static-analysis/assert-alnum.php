<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function alnum(string $value): string
{
    return Assert::alnum($value);
}

/**
 * @psalm-pure
 */
function nullOrAlnum(?string $value): ?string
{
    return Assert::nullOrAlnum($value);
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 * @return iterable<string>
 */
function allAlnum(iterable $value): iterable
{
    return Assert::allAlnum($value);
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 * @return iterable<string|null>
 */
function allNullOrAlnum(iterable $value): iterable
{
    return Assert::allNullOrAlnum($value);
}
