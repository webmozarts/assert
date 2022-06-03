<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param array<class-string> $classes
 *
 * @return mixed
 */
function isInstanceOfAny($value, array $classes)
{
    Assert::isInstanceOfAny($value, $classes);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param array<class-string> $classes
 *
 * @return mixed
 */
function nullOrIsInstanceOfAny($value, array $classes)
{
    Assert::nullOrIsInstanceOfAny($value, $classes);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param array<class-string> $classes
 *
 * @return mixed
 */
function allIsInstanceOfAny($value, array $classes)
{
    Assert::allIsInstanceOfAny($value, $classes);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param array<class-string> $classes
 *
 * @return mixed
 */
function allNullOrIsInstanceOfAny($value, array $classes)
{
    Assert::allNullOrIsInstanceOfAny($value, $classes);

    return $value;
}
