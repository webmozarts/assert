<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Serializable;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function isInstanceOf(mixed $value): Serializable
{
    return Assert::isInstanceOf($value, Serializable::class);
}

/**
 * @psalm-pure
 */
function nullOrIsInstanceOf(mixed $value): ?Serializable
{
    return Assert::nullOrIsInstanceOf($value, Serializable::class);
}

/**
 * @psalm-pure
 */
function allIsInstanceOf(mixed $value): iterable
{
    return Assert::allIsInstanceOf($value, Serializable::class);
}

/**
 * @psalm-pure
 */
function allNullOrIsInstanceOf(mixed $value): iterable
{
    return Assert::allNullOrIsInstanceOf($value, Serializable::class);
}
