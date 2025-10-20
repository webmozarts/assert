<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function alpha($value): mixed
{
    Assert::alpha($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrAlpha($value): mixed
{
    Assert::nullOrAlpha($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allAlpha($value): mixed
{
    Assert::allAlpha($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrAlpha($value): mixed
{
    Assert::allNullOrAlpha($value);

    return $value;
}
