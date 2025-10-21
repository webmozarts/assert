<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return numeric
 */
function numeric(mixed $value)
{
    Assert::numeric($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return null|numeric
 */
function nullOrNumeric(mixed $value)
{
    Assert::nullOrNumeric($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNumeric(mixed $value): iterable
{
    Assert::allNumeric($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrNumeric(mixed $value): iterable
{
    Assert::allNullOrNumeric($value);

    return $value;
}
