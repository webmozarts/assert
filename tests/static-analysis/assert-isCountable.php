<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use countable;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function isCountable($value): Countable {
    Assert::isCountable($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrIsCountable($value): null|Countable {
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
