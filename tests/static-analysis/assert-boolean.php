<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function boolean($value): bool
{
    Assert::boolean($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrBoolean($value): ?bool
{
    Assert::nullOrBoolean($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<bool>
 */
function allBoolean($value): iterable
{
    Assert::allBoolean($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<bool|null>
 */
function allNullOrBoolean($value): iterable
{
    Assert::allNullOrBoolean($value);

    return $value;
}
