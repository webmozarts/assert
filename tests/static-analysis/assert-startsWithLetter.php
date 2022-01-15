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
function startsWithLetter($value, string $prefix)
{
    Assert::startsWithLetter($value, $prefix);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return mixed
 */
function nullOrStartsWithLetter($value, string $prefix)
{
    Assert::nullOrStartsWithLetter($value, $prefix);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return mixed
 */
function allStartsWithLetter($value, string $prefix)
{
    Assert::allStartsWithLetter($value, $prefix);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return mixed
 */
function allNullOrStartsWithLetter($value, string $prefix)
{
    Assert::allNullOrStartsWithLetter($value, $prefix);

    return $value;
}
