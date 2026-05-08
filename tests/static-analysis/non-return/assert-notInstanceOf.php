<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use stdClass;
use Webmozart\Assert\Assert;

/**
 * 
 */
function notInstanceOf(mixed $value): object
{
    Assert::notInstanceOf($value, stdClass::class);

    return $value;
}

/**
 * @psalm-template T of object
 * @param class-string<T> $class
 */
function nullOrNotInstanceOf(mixed $value, $class): mixed
{
    Assert::nullOrNotInstanceOf($value, $class);

    return $value;
}

/**
 * @psalm-template T of object
 * @param class-string<T> $class
 */
function allNotInstanceOf(mixed $value, $class): mixed
{
    Assert::allNotInstanceOf($value, $class);

    return $value;
}

/**
 * @psalm-template T of object
 * @param class-string<T> $class
 */
function allNullOrNotInstanceOf(mixed $value, $class): mixed
{
    Assert::allNullOrNotInstanceOf($value, $class);

    return $value;
}
