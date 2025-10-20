<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return false
 */
function false($value): bool
{
    Assert::false($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return null|false
 */
function nullOrFalse($value): ?bool
{
    Assert::nullOrFalse($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allFalse($value): iterable
{
    Assert::allFalse($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrFalse($value): iterable
{
    Assert::allFalse($value);

    return $value;
}
