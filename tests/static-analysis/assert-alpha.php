<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function alpha(mixed $value): mixed
{
    Assert::alpha($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrAlpha(mixed $value): mixed
{
    Assert::nullOrAlpha($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allAlpha(mixed $value): mixed
{
    Assert::allAlpha($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrAlpha(mixed $value): mixed
{
    Assert::allNullOrAlpha($value);

    return $value;
}
