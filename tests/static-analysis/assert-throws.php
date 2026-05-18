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
    return Assert::throws($value, $class);
}

/**
 * @param class-string<Throwable> $class
 */
function nullOrThrows(?Closure $value, $class): ?Closure
{
    return Assert::nullOrThrows($value, $class);
}

/**
 * @param iterable<Closure> $value
 * @param class-string<Throwable> $class
 */
function allThrows(iterable $value, $class): iterable
{
    return Assert::allThrows($value, $class);
}
/**
 * @param iterable<Closure|null> $value
 * @param class-string<Throwable> $class
 */
function allNullOrThrows(iterable $value, $class): iterable
{
    return Assert::allNullOrThrows($value, $class);
}
