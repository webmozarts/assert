<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Serializable;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return class-string<Serializable>
 */
function implementsInterface($value): string
{
    Assert::implementsInterface($value, Serializable::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return null|class-string<Serializable>
 */
function nullOrImplementsInterface($value): ?string
{
    Assert::nullOrImplementsInterface($value, Serializable::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<class-string<Serializable>>
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
 * @return iterable<class-string<Serializable>|null>
 */
function allNullOrImplementsInterface($value): iterable
{
    Assert::allNullOrImplementsInterface($value, Serializable::class);

    return $value;
}
