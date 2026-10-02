<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Countable;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return countable
 */
function isCountable(mixed $value): Countable
{
    Assert::isCountable($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return null|countable
 */
function nullOrIsCountable(mixed $value): ?Countable
{
    Assert::nullOrIsCountable($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return iterable<Countable>
 */
function allIsCountable(mixed $value)
{
    Assert::allIsCountable($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return iterable<Countable|null>
 */
function allNullOrIsCountable(mixed $value)
{
    Assert::allNullOrIsCountable($value);

    return $value;
}
