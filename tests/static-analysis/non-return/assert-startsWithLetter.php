<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function startsWithLetter(mixed $value, string $prefix): mixed
{
    Assert::startsWithLetter($value, $prefix);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrStartsWithLetter(mixed $value, string $prefix): mixed
{
    Assert::nullOrStartsWithLetter($value, $prefix);

    return $value;
}

/**
 * @psalm-pure
 */
function allStartsWithLetter(mixed $value, string $prefix): mixed
{
    Assert::allStartsWithLetter($value, $prefix);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrStartsWithLetter(mixed $value, string $prefix): mixed
{
    Assert::allNullOrStartsWithLetter($value, $prefix);

    return $value;
}
