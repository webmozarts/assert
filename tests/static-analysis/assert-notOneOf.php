<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function notOneOf(mixed $value, array $values): mixed
{
    Assert::notOneOf($value, $values);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrNotOneOf(mixed $value, array $values): mixed
{
    Assert::nullOrNotOneOf($value, $values);

    return $value;
}

/**
 * @psalm-pure
 */
function allNotOneOf(mixed $value, array $values): mixed
{
    Assert::allNotOneOf($value, $values);

    return $value;
}
