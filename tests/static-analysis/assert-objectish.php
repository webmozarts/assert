<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function objectish(mixed $value): object|string
{
    return Assert::objectish($value);
}

/**
 * @psalm-pure
 */
function nullOrObjectish(mixed $value): object|string|null
{
    return Assert::nullOrObjectish($value);
}

/**
 * @psalm-pure
 */
function allObjectish(mixed $value): iterable
{
    return Assert::allObjectish($value);
}

/**
 * @psalm-pure
 */
function allNullOrObjectish(mixed $value): iterable
{
    return Assert::allNullOrObjectish($value);
}
