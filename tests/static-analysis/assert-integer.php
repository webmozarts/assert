<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function integer($value): int
{
    Assert::integer($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrInteger($value): ?int
{
    Assert::nullOrInteger($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<int>
 */
function allInteger($value): iterable
{
    Assert::allInteger($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<int|null>
 */
function allNullOrInteger($value): iterable
{
    Assert::allNullOrInteger($value);

    return $value;
}
