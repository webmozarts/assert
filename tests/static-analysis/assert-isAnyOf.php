<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param object|string $value
 * @param array<class-string> $classes
 */
function isAnyOf($value, array $classes): object|string {
    Assert::isAnyOf($value, $classes);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param null|object|string $value
 * @param array<class-string> $classes
 */
function nullOrIsAnyOf($value, array $classes): null|object|string {
    Assert::nullOrIsAnyOf($value, $classes);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<object|string> $value
 * @param array<class-string> $classes
 */
function allIsAnyOf($value, array $classes): iterable
{
    Assert::allIsAnyOf($value, $classes);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<object|string|null> $value
 * @param array<class-string> $classes
 */
function allNullOrIsAnyOf($value, array $classes): iterable
{
    Assert::allNullOrIsAnyOf($value, $classes);

    return $value;
}
