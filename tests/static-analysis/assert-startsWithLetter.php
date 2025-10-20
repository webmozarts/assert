<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function startsWithLetter($value, string $prefix): mixed
{
    Assert::startsWithLetter($value, $prefix);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrStartsWithLetter($value, string $prefix): mixed
{
    Assert::nullOrStartsWithLetter($value, $prefix);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allStartsWithLetter($value, string $prefix): mixed
{
    Assert::allStartsWithLetter($value, $prefix);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrStartsWithLetter($value, string $prefix): mixed
{
    Assert::allNullOrStartsWithLetter($value, $prefix);

    return $value;
}
