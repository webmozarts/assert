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
function isNotA(object $value): stdClass
{
    Assert::isNotA($value, DateTime::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param null|object|string $value
 * @param class-string $class
 *
 * @return null|object|string
 */
function nullOrIsNotA($value, $class)
{
    Assert::nullOrIsNotA($value, $class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<object|string> $value
 * @param class-string $class
 *
 * @return iterable<object|string>
 */
function allIsNotA($value, $class): iterable
{
    Assert::allIsNotA($value, $class);

    return $value;
}
