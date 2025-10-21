<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return non-empty-string
 */
function stringNotEmpty(mixed $value): string
{
    Assert::stringNotEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return null|non-empty-string
 */
function nullOrStringNotEmpty(mixed $value): ?string
{
    Assert::nullOrStringNotEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allStringNotEmpty(mixed $value): iterable
{
    Assert::allStringNotEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrStringNotEmpty(mixed $value): iterable
{
    Assert::allNullOrStringNotEmpty($value);

    return $value;
}
