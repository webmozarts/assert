<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function notInArray(mixed $value, array $values): mixed
{
    return Assert::notInArray($value, $values);
}

/**
 * @psalm-pure
 */
function nullOrNotInArray(mixed $value, array $values): mixed
{
    return Assert::nullOrNotInArray($value, $values);
}

/**
 * @psalm-pure
 */
function allNotInArray(mixed $value, array $values): mixed
{
    return Assert::allNotInArray($value, $values);
}
