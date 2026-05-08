<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Serializable;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function isInstanceOf(mixed $value): Serializable
{
    Assert::isInstanceOf($value, Serializable::class);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrIsInstanceOf(mixed $value): ?Serializable
{
    Assert::nullOrIsInstanceOf($value, Serializable::class);

    return $value;
}

/**
 * @psalm-pure
 */
function allIsInstanceOf(mixed $value): iterable
{
    Assert::allIsInstanceOf($value, Serializable::class);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrIsInstanceOf(mixed $value): iterable
{
    Assert::allNullOrIsInstanceOf($value, Serializable::class);

    return $value;
}
