<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function unicodeLetters(mixed $value): mixed
{
    Assert::unicodeLetters($value);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrUnicodeLetters(mixed $value): mixed
{
    Assert::nullOrUnicodeLetters($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allUnicodeLetters(mixed $value): mixed
{
    Assert::allUnicodeLetters($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrUnicodeLetters(mixed $value): mixed
{
    Assert::allNullOrUnicodeLetters($value);

    return $value;
}
