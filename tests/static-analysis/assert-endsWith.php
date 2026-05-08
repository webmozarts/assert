<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function endsWith(string $value, string $suffix): string
{
    return Assert::endsWith($value, $suffix);
}

/**
 * @psalm-pure
 */
function nullOrEndsWith(?string $value, string $suffix): ?string
{
    return Assert::nullOrEndsWith($value, $suffix);
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 */
function allEndsWith(iterable $value, string $suffix): iterable
{
    return Assert::allEndsWith($value, $suffix);
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 */
function allNullOrEndsWith(iterable $value, string $suffix): iterable
{
    return Assert::allNullOrEndsWith($value, $suffix);
}
