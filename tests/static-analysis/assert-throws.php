<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Closure;
use Throwable;
use Webmozart\Assert\Assert;

/**
 * @param class-string<Throwable> $class
 */
function throws(Closure $value, $class): Closure
{
    Assert::throws($value, $class);

    return $value;
}

/**
 * @param class-string<Throwable> $class
 */
function nullOrThrows(?Closure $value, $class): ?Closure
{
    Assert::nullOrThrows($value, $class);

    return $value;
}

/**
 * @param iterable<Closure> $value
 * @param class-string<Throwable> $class
 */
function allThrows(iterable $value, $class): iterable
{
    Assert::allThrows($value, $class);

    return $value;
}
/**
 * @param iterable<Closure|null> $value
 * @param class-string<Throwable> $class
 */
function allNullOrThrows(iterable $value, $class): iterable
{
    Assert::allNullOrThrows($value, $class);

    return $value;
}
