<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function objectish(mixed $value): object|string
{
    Assert::objectish($value);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrObjectish(mixed $value): object|string|null
{
    Assert::nullOrObjectish($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allObjectish(mixed $value): iterable
{
    Assert::allObjectish($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrObjectish(mixed $value): iterable
{
    Assert::allNullOrObjectish($value);

    return $value;
}
