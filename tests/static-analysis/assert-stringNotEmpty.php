<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return non-empty-string
 */
function stringNotEmpty($value): string
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
function nullOrStringNotEmpty($value): ?string
{
    Assert::nullOrStringNotEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<non-empty-string>
 */
function allStringNotEmpty($value): iterable
{
    Assert::allStringNotEmpty($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<non-empty-string|null>
 */
function allNullOrStringNotEmpty($value): iterable
{
    Assert::allNullOrStringNotEmpty($value);

    return $value;
}
