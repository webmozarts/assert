<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param object|string $value
 * @param array<class-string> $classes
 */
function isAnyOf(mixed $value, array $classes): object|string
{
    return Assert::isAnyOf($value, $classes);
}

/**
 * @psalm-pure
 *
 * @param null|object|string $value
 * @param array<class-string> $classes
 */
function nullOrIsAnyOf(mixed $value, array $classes): object|string|null
{
    return Assert::nullOrIsAnyOf($value, $classes);
}

/**
 * @psalm-pure
 *
 * @param iterable<object|string> $value
 * @param array<class-string> $classes
 */
function allIsAnyOf(mixed $value, array $classes): iterable
{
    return Assert::allIsAnyOf($value, $classes);
}

/**
 * @psalm-pure
 *
 * @param iterable<object|string|null> $value
 * @param array<class-string> $classes
 */
function allNullOrIsAnyOf(mixed $value, array $classes): iterable
{
    return Assert::allNullOrIsAnyOf($value, $classes);
}
