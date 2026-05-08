<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use DateTime;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @psalm-return object|class-string
 */
function isNotA(mixed $value): object|string
{
    return Assert::isNotA($value, DateTime::class);
}

/**
 * @psalm-pure
 *
 * @param null|object|string $value
 * @param class-string $class
 */
function nullOrIsNotA(mixed $value, $class): object|string|null
{
    return Assert::nullOrIsNotA($value, $class);
}

/**
 * @psalm-pure
 *
 * @param iterable<object|string> $value
 * @param class-string $class
 */
function allIsNotA(mixed $value, $class): iterable
{
    return Assert::allIsNotA($value, $class);
}

/**
 * @psalm-pure
 *
 * @param iterable<object|string|null> $value
 * @param class-string $class
 */
function allNullOrIsNotA(mixed $value, $class): iterable
{
    return Assert::allNullOrIsNotA($value, $class);
}
