<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use stdClass;
use DateTime;
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
