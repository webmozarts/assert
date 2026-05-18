<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function notOneOf(mixed $value, array $values): mixed
{
    return Assert::notOneOf($value, $values);
}

/**
 * @psalm-pure
 */
function nullOrNotOneOf(mixed $value, array $values): mixed
{
    return Assert::nullOrNotOneOf($value, $values);
}

/**
 * @psalm-pure
 */
function allNotOneOf(mixed $value, array $values): mixed
{
    return Assert::allNotOneOf($value, $values);
}
