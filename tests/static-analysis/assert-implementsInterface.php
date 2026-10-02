<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Serializable;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return Serializable|class-string<Serializable>
 */
function implementsInterface(mixed $value)
{
    return Assert::implementsInterface($value, Serializable::class);
}

/**
 * @psalm-pure
 *
 * @return Serializable|class-string<Serializable>|null
 */
function nullOrImplementsInterface(mixed $value)
{
    return Assert::nullOrImplementsInterface($value, Serializable::class);
}

/**
 * @psalm-pure
 *
 * @return iterable<mixed, Serializable|class-string<Serializable>>
 */
function allImplementsInterface(mixed $value): iterable
{
    return Assert::allImplementsInterface($value, Serializable::class);
}

/**
 * @psalm-pure
 *
 * @return iterable<mixed, Serializable|class-string<Serializable>|null>
 */
function allNullOrImplementsInterface(mixed $value): iterable
{
    return Assert::allNullOrImplementsInterface($value, Serializable::class);
}
