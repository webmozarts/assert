<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param array<class-string> $classes
 */
function isInstanceOfAny($value, array $classes): mixed
{
    Assert::isInstanceOfAny($value, $classes);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param array<class-string> $classes
 */
function nullOrIsInstanceOfAny($value, array $classes): mixed
{
    Assert::nullOrIsInstanceOfAny($value, $classes);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param array<class-string> $classes
 */
function allIsInstanceOfAny($value, array $classes): mixed
{
    Assert::allIsInstanceOfAny($value, $classes);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param array<class-string> $classes
 */
function allNullOrIsInstanceOfAny($value, array $classes): mixed
{
    Assert::allNullOrIsInstanceOfAny($value, $classes);

    return $value;
}
