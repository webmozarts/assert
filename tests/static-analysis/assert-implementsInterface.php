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
function implementsInterface($value)
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
function nullOrImplementsInterface($value)
{
    Assert::nullOrImplementsInterface($value, Serializable::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<mixed, Serializable|class-string<Serializable>>
 */
function allImplementsInterface($value): iterable
{
    Assert::allImplementsInterface($value, Serializable::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<mixed, Serializable|class-string<Serializable>|null>
 */
function allNullOrImplementsInterface($value): iterable
{
    Assert::allNullOrImplementsInterface($value, Serializable::class);

    return $value;
}
