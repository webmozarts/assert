<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use DateTime;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @psalm-return object|class-string
 */
function isNotA(mixed $value): object|string
{
    Assert::isNotA($value, DateTime::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param null|object|string $value
 * @param class-string $class
 */
function nullOrIsNotA(mixed $value, $class): object|string|null
{
    Assert::nullOrIsNotA($value, $class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<object|string> $value
 * @param class-string $class
 */
function allIsNotA(mixed $value, $class): iterable
{
    Assert::allIsNotA($value, $class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<object|string|null> $value
 * @param class-string $class
 */
function allNullOrIsNotA(mixed $value, $class): iterable
{
    Assert::allNullOrIsNotA($value, $class);

    return $value;
}
