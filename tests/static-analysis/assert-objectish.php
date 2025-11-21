<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function objectish(mixed $value): object|string
{
    Assert::objectish($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrObjectish(mixed $value): object|string|null
{
    Assert::nullOrObjectish($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allObjectish(mixed $value): iterable
{
    Assert::allObjectish($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrObjectish(mixed $value): iterable
{
    Assert::allNullOrObjectish($value);

    return $value;
}
