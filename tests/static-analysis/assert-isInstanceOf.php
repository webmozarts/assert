<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Serializable;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return Serializable
 */
function isInstanceOf($value)
{
    Assert::isInstanceOf($value, Serializable::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return null|Serializable
 */
function nullOrIsInstanceOf($value)
{
    Assert::nullOrIsInstanceOf($value, Serializable::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<Serializable>
 */
function allIsInstanceOf($value)
{
    Assert::allIsInstanceOf($value, Serializable::class);

    return $value;
}
