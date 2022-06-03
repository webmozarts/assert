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
function subclassOf($value)
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
function nullOrSubclassOf($value)
{
    Assert::nullOrSubclassOf($value, stdClass::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<class-string<stdClass>|stdClass>
 */
function allSubclassOf($value): iterable
{
    Assert::allSubclassOf($value, stdClass::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<class-string<stdClass>|stdClass|null>
 */
function allNullOrSubclassOf($value): iterable
{
    Assert::allNullOrSubclassOf($value, stdClass::class);

    return $value;
}
