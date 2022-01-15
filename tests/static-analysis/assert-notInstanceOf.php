<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use DateTime;
use stdClass;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param stdClass|DateTime $value
 */
function notInstanceOf($value): DateTime
{
    Assert::notInstanceOf($value, stdClass::class);

    return $value;
}

/**
 * @psalm-pure
 * @psalm-template T of object
 *
 * @param mixed $value
 * @param class-string<T> $class
 *
 * @return mixed
 */
function nullOrNotInstanceOf($value, $class)
{
    Assert::nullOrNotInstanceOf($value, $class);

    return $value;
}

/**
 * @psalm-pure
 * @psalm-template T of object
 *
 * @param mixed $value
 * @param class-string<T> $class
 *
 * @return mixed
 */
function allNotInstanceOf($value, $class)
{
    Assert::allNotInstanceOf($value, $class);

    return $value;
}

/**
 * @psalm-pure
 * @psalm-template T of object
 *
 * @param mixed $value
 * @param class-string<T> $class
 *
 * @return mixed
 */
function allNullOrNotInstanceOf($value, $class)
{
    Assert::allNullOrNotInstanceOf($value, $class);

    return $value;
}
