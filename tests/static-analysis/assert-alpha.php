<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function alpha(mixed $value): mixed
{
    return Assert::alpha($value);
}

/**
 * @psalm-pure
 */
function nullOrAlpha(mixed $value): mixed
{
    return Assert::nullOrAlpha($value);
}

/**
 * @psalm-pure
 */
function allAlpha(mixed $value): mixed
{
    return Assert::allAlpha($value);
}

/**
 * @psalm-pure
 */
function allNullOrAlpha(mixed $value): mixed
{
    return Assert::allNullOrAlpha($value);
}
