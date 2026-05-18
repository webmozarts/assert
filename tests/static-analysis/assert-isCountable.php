<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Countable;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function isCountable(mixed $value): Countable
{
    return Assert::isCountable($value);
}

/**
 * @psalm-pure
 */
function nullOrIsCountable(mixed $value): ?Countable
{
    return Assert::nullOrIsCountable($value);
}

/**
 * @psalm-pure
 *
 * @return iterable<Countable>
 */
function allIsCountable(mixed $value)
{
    return Assert::allIsCountable($value);
}

/**
 * @psalm-pure
 *
 * @return iterable<Countable|null>
 */
function allNullOrIsCountable(mixed $value)
{
    return Assert::allNullOrIsCountable($value);
}
