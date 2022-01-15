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
 *
 * @return iterable<false>
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
 *
 * @return iterable<false|null>
 */
function allNullOrFalse($value): iterable
{
    Assert::allFalse($value);

    return $value;
}
