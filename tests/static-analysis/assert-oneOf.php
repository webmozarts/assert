<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function oneOf(mixed $value, array $values): mixed
{
    return Assert::oneOf($value, $values);
}

/**
 * @psalm-pure
 */
function nullOrOneOf(mixed $value, array $values): mixed
{
    return Assert::nullOrOneOf($value, $values);
}

/**
 * @psalm-pure
 */
function allOneOf(mixed $value, array $values): mixed
{
    return Assert::allOneOf($value, $values);
}

/**
 * @psalm-pure
 */
function allNullOrOneOf(mixed $value, array $values): mixed
{
    return Assert::allNullOrOneOf($value, $values);
}
