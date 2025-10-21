<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function unicodeLetters(mixed $value): mixed
{
    Assert::unicodeLetters($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrUnicodeLetters(mixed $value): mixed
{
    Assert::nullOrUnicodeLetters($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allUnicodeLetters(mixed $value): mixed
{
    Assert::allUnicodeLetters($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrUnicodeLetters(mixed $value): mixed
{
    Assert::allNullOrUnicodeLetters($value);

    return $value;
}
