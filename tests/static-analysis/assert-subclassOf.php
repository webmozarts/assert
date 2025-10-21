<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use stdClass;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return class-string<stdClass>|stdClass
 */
function subclassOf(mixed $value)
{
    Assert::subclassOf($value, stdClass::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return null|class-string<stdClass>|stdClass
 */
function nullOrSubclassOf(mixed $value)
{
    Assert::nullOrSubclassOf($value, stdClass::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allSubclassOf(mixed $value): iterable
{
    Assert::allSubclassOf($value, stdClass::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrSubclassOf(mixed $value): iterable
{
    Assert::allNullOrSubclassOf($value, stdClass::class);

    return $value;
}
