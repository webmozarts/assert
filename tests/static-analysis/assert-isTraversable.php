<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function isTraversable($value): iterable
{
    /** @psalm-suppress DeprecatedMethod */
    Assert::isTraversable($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrIsTraversable($value): ?iterable
{
    /** @psalm-suppress DeprecatedMethod */
    Assert::nullOrIsTraversable($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<iterable>
 */
function allIsTraversable($value): iterable
{
    /** @psalm-suppress DeprecatedMethod */
    Assert::allIsTraversable($value);

    return $value;
}
