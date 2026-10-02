<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param object|string $value
 * @param array<class-string> $classes
 * @return object|string
 */
function isAnyOf(mixed $value, array $classes): object|string
{
    Assert::isAnyOf($value, $classes);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param null|object|string $value
 * @param array<class-string> $classes
 * @return null|object|string
 */
function nullOrIsAnyOf(mixed $value, array $classes): object|string|null
{
    Assert::nullOrIsAnyOf($value, $classes);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<object|string> $value
 * @param array<class-string> $classes
 * @return iterable<object|string>
 */
function allIsAnyOf(mixed $value, array $classes): iterable
{
    Assert::allIsAnyOf($value, $classes);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<object|string|null> $value
 * @param array<class-string> $classes
 * @return iterable<object|string|null>
 */
function allNullOrIsAnyOf(mixed $value, array $classes): iterable
{
    Assert::allNullOrIsAnyOf($value, $classes);

    return $value;
}
