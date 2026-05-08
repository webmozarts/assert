<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use stdClass;
use Webmozart\Assert\Assert;

/**
 * 
 */
function notInstanceOf(mixed $value): object
{
    return Assert::notInstanceOf($value, stdClass::class);
}

/**
 * @psalm-template T of object
 * @param class-string<T> $class
 */
function nullOrNotInstanceOf($value, $class): mixed
{
    return Assert::nullOrNotInstanceOf($value, $class);
}

/**
 * @psalm-template T of object
 * @param class-string<T> $class
 */
function allNotInstanceOf($value, $class): mixed
{
    return Assert::allNotInstanceOf($value, $class);
}

/**
 * @psalm-template T of object
 * @param class-string<T> $class
 */
function allNullOrNotInstanceOf($value, $class): mixed
{
    return Assert::allNullOrNotInstanceOf($value, $class);
}
