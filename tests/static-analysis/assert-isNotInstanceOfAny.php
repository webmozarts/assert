<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param array<class-string> $classes
 */
function isNotInstanceOfAny(mixed $value, array $classes): mixed
{
    return Assert::isNotInstanceOfAny($value, $classes);
}

/**
 * @param array<class-string> $classes
 */
function nullOrIsNotInstanceOfAny(mixed $value, array $classes): mixed
{
    return Assert::nullOrIsNotInstanceOfAny($value, $classes);
}

/**
 * @param iterable<mixed> $value
 * @param array<class-string> $classes
 */
function allIsNotInstanceOfAny(iterable $value, array $classes): iterable
{
    return Assert::allIsNotInstanceOfAny($value, $classes);
}

/**
 * @param iterable<mixed|null> $value
 * @param array<class-string> $classes
 */
function allNullOrIsNotInstanceOfAny(iterable $value, array $classes): iterable
{
    return Assert::allNullOrIsNotInstanceOfAny($value, $classes);
}
