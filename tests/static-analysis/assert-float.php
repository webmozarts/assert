<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function float($value): float
{
    Assert::float($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrFloat($value): ?float
{
    Assert::nullOrFloat($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<float>
 */
function allFloat($value): iterable
{
    Assert::allFloat($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<float|null>
 */
function allNullOrFloat($value): iterable
{
    Assert::allNullOrFloat($value);

    return $value;
}
