<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Serializable;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
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
 * @param mixed $value
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
 *
 * @param mixed $value
 */
function allImplementsInterface(mixed $value): iterable
{
    Assert::allImplementsInterface($value, Serializable::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrImplementsInterface(mixed $value): iterable
{
    Assert::allNullOrImplementsInterface($value, Serializable::class);

    return $value;
}
