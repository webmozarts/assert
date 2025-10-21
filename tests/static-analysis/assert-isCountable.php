<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use countable;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function isCountable(mixed $value): Countable {
    Assert::isCountable($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrIsCountable(mixed $value): null|Countable {
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
function allIsCountable(mixed $value)
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
function allNullOrIsCountable(mixed $value)
{
    Assert::allNullOrIsCountable($value);

    return $value;
}
