<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Countable;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return countable
 */
function isCountable($value)
{
    Assert::isCountable($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return null|countable
 */
function nullOrIsCountable($value)
{
    Assert::nullOrIsCountable($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<countable>
 */
function allIsCountable($value)
{
    Assert::allIsCountable($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<countable|null>
 */
function allNullOrIsCountable($value)
{
    Assert::allNullOrIsCountable($value);

    return $value;
}
