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
function numeric($value)
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
function nullOrNumeric($value)
{
    Assert::nullOrNumeric($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<numeric>
 */
function allNumeric($value): iterable
{
    Assert::allNumeric($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<numeric|null>
 */
function allNullOrNumeric($value): iterable
{
    Assert::allNullOrNumeric($value);

    return $value;
}
