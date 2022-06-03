<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return mixed
 */
function unicodeLetters($value)
{
    Assert::unicodeLetters($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return mixed
 */
function nullOrUnicodeLetters($value)
{
    Assert::nullOrUnicodeLetters($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return mixed
 */
function allUnicodeLetters($value)
{
    Assert::allUnicodeLetters($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return mixed
 */
function allNullOrUnicodeLetters($value)
{
    Assert::allNullOrUnicodeLetters($value);

    return $value;
}
