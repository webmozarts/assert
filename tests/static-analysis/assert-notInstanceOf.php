<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use DateTime;
use stdClass;
use Webmozart\Assert\Assert;

/**
 * @param stdClass|DateTime $value
 */
function notInstanceOf(mixed $value): DateTime
{
    Assert::notInstanceOf($value, stdClass::class);

    return $value;
}

/**
 * @psalm-template T of object
 *
 * @param mixed $value
 * @param class-string<T> $class
 */
function nullOrNotInstanceOf($value, $class): mixed
{
    Assert::nullOrNotInstanceOf($value, $class);

    return $value;
}

/**
 * @psalm-template T of object
 *
 * @param mixed $value
 * @param class-string<T> $class
 */
function allNotInstanceOf($value, $class): mixed
{
    Assert::allNotInstanceOf($value, $class);

    return $value;
}

/**
 * @psalm-template T of object
 *
 * @param mixed $value
 * @param class-string<T> $class
 */
function allNullOrNotInstanceOf($value, $class): mixed
{
    Assert::allNullOrNotInstanceOf($value, $class);

    return $value;
}
