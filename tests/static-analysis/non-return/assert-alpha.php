<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function alpha(mixed $value): mixed
{
    Assert::alpha($value);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrAlpha(mixed $value): mixed
{
    Assert::nullOrAlpha($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allAlpha(mixed $value): mixed
{
    Assert::allAlpha($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrAlpha(mixed $value): mixed
{
    Assert::allNullOrAlpha($value);

    return $value;
}
