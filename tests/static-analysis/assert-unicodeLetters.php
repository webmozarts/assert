<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function unicodeLetters($value): mixed
{
    Assert::unicodeLetters($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrUnicodeLetters($value): mixed
{
    Assert::nullOrUnicodeLetters($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allUnicodeLetters($value): mixed
{
    Assert::allUnicodeLetters($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrUnicodeLetters($value): mixed
{
    Assert::allNullOrUnicodeLetters($value);

    return $value;
}
