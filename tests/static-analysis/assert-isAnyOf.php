<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param object|string $value
 * @param array<class-string> $classes
 *
 * @return object|string
 */
function isAnyOf($value, array $classes)
{
    Assert::isAnyOf($value, $classes);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param null|object|string $value
 * @param array<class-string> $classes
 *
 * @return null|object|string
 */
function nullOrIsAnyOf($value, array $classes)
{
    Assert::nullOrIsAnyOf($value, $classes);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<object|string> $value
 * @param array<class-string> $classes
 *
 * @return iterable<object|string>
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
 *
 * @return iterable<object|string|null>
 */
function allNullOrIsAnyOf($value, array $classes): iterable
{
    Assert::allNullOrIsAnyOf($value, $classes);

    return $value;
}
