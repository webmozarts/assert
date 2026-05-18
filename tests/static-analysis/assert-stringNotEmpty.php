<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return non-empty-string
 */
function stringNotEmpty(mixed $value): string
{
    return Assert::stringNotEmpty($value);
}

/**
 * @psalm-pure
 *
 * @return null|non-empty-string
 */
function nullOrStringNotEmpty(mixed $value): ?string
{
    return Assert::nullOrStringNotEmpty($value);
}

/**
 * @psalm-pure
 */
function allStringNotEmpty(mixed $value): iterable
{
    return Assert::allStringNotEmpty($value);
}

/**
 * @psalm-pure
 */
function allNullOrStringNotEmpty(mixed $value): iterable
{
    return Assert::allNullOrStringNotEmpty($value);
}
