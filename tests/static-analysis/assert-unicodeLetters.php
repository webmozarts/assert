<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function unicodeLetters(mixed $value): mixed
{
    return Assert::unicodeLetters($value);
}

/**
 * @psalm-pure
 */
function nullOrUnicodeLetters(mixed $value): mixed
{
    return Assert::nullOrUnicodeLetters($value);
}

/**
 * @psalm-pure
 */
function allUnicodeLetters(mixed $value): mixed
{
    return Assert::allUnicodeLetters($value);
}

/**
 * @psalm-pure
 */
function allNullOrUnicodeLetters(mixed $value): mixed
{
    return Assert::allNullOrUnicodeLetters($value);
}
