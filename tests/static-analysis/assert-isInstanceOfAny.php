<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param object $value
 * @param array<class-string> $classes
 */
function isInstanceOfAny(object $value, array $classes): object
{
    return Assert::isInstanceOfAny($value, $classes);
}

/**
 * @param object|null $value
 * @param array<class-string> $classes
 */
function nullOrIsInstanceOfAny(?object $value, array $classes): ?object
{
    return Assert::nullOrIsInstanceOfAny($value, $classes);
}

/**
 * @param iterable<object> $value
 * @param array<class-string> $classes
 */
function allIsInstanceOfAny(iterable $value, array $classes): iterable
{
    return Assert::allIsInstanceOfAny($value, $classes);
}

/**
 * @param iterable<object|null> $value
 * @param array<class-string> $classes
 */
function allNullOrIsInstanceOfAny(iterable $value, array $classes): iterable
{
    return Assert::allNullOrIsInstanceOfAny($value, $classes);
}
