<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Serializable;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return Serializable|class-string<Serializable>
 */
function implementsInterface(mixed $value)
{
    Assert::implementsInterface($value, Serializable::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return Serializable|class-string<Serializable>|null
 */
function nullOrImplementsInterface(mixed $value)
{
    Assert::nullOrImplementsInterface($value, Serializable::class);

    return $value;
}

/**
 * @psalm-pure
 */
function allImplementsInterface(mixed $value): iterable
{
    Assert::allImplementsInterface($value, Serializable::class);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrImplementsInterface(mixed $value): iterable
{
    Assert::allNullOrImplementsInterface($value, Serializable::class);

    return $value;
}
