<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use stdClass;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
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
 * @return null|class-string<stdClass>|stdClass
 */
function nullOrSubclassOf(mixed $value)
{
    Assert::nullOrSubclassOf($value, stdClass::class);

    return $value;
}

/**
 * @psalm-pure
 */
function allSubclassOf(mixed $value): iterable
{
    Assert::allSubclassOf($value, stdClass::class);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrSubclassOf(mixed $value): iterable
{
    Assert::allNullOrSubclassOf($value, stdClass::class);

    return $value;
}
