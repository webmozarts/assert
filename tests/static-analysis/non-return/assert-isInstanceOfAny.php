<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @param object $value
 * @param array<class-string> $classes
 */
function isInstanceOfAny(object $value, array $classes): object
{
    Assert::isInstanceOfAny($value, $classes);

    return $value;
}

/**
 * @param object|null $value
 * @param array<class-string> $classes
 */
function nullOrIsInstanceOfAny(?object $value, array $classes): ?object
{
    Assert::nullOrIsInstanceOfAny($value, $classes);

    return $value;
}

/**
 * @param iterable<object> $value
 * @param array<class-string> $classes
 */
function allIsInstanceOfAny(iterable $value, array $classes): iterable
{
    Assert::allIsInstanceOfAny($value, $classes);

    return $value;
}

/**
 * @param iterable<object|null> $value
 * @param array<class-string> $classes
 */
function allNullOrIsInstanceOfAny(iterable $value, array $classes): iterable
{
    Assert::allNullOrIsInstanceOfAny($value, $classes);

    return $value;
}
