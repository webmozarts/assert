<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use stdClass;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return class-string<stdClass>|stdClass
 */
function subclassOf(mixed $value)
{
    return Assert::subclassOf($value, stdClass::class);
}

/**
 * @psalm-pure
 *
 * @return null|class-string<stdClass>|stdClass
 */
function nullOrSubclassOf(mixed $value)
{
    return Assert::nullOrSubclassOf($value, stdClass::class);
}

/**
 * @psalm-pure
 */
function allSubclassOf(mixed $value): iterable
{
    return Assert::allSubclassOf($value, stdClass::class);
}

/**
 * @psalm-pure
 */
function allNullOrSubclassOf(mixed $value): iterable
{
    return Assert::allNullOrSubclassOf($value, stdClass::class);
}
