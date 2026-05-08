<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function oneOf(mixed $value, array $values): mixed
{
    Assert::oneOf($value, $values);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrOneOf(mixed $value, array $values): mixed
{
    Assert::nullOrOneOf($value, $values);

    return $value;
}

/**
 * @psalm-pure
 */
function allOneOf(mixed $value, array $values): mixed
{
    Assert::allOneOf($value, $values);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrOneOf(mixed $value, array $values): mixed
{
    Assert::allNullOrOneOf($value, $values);

    return $value;
}
