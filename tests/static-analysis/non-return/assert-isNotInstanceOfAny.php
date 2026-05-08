<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * 
 * @param array<class-string> $classes
 */
function isNotInstanceOfAny(mixed $value, array $classes): mixed
{
    Assert::isNotInstanceOfAny($value, $classes);

    return $value;
}

/**
 * 
 * @param array<class-string> $classes
 */
function nullOrIsNotInstanceOfAny(mixed $value, array $classes): mixed
{
    Assert::nullOrIsNotInstanceOfAny($value, $classes);

    return $value;
}

/**
 * @param iterable<mixed> $value
 * @param array<class-string> $classes
 */
function allIsNotInstanceOfAny(iterable $value, array $classes): iterable
{
    Assert::allIsNotInstanceOfAny($value, $classes);

    return $value;
}

/**
 * @param iterable<mixed|null> $value
 * @param array<class-string> $classes
 */
function allNullOrIsNotInstanceOfAny(iterable $value, array $classes): iterable
{
    Assert::allNullOrIsNotInstanceOfAny($value, $classes);

    return $value;
}
