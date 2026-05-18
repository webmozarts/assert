<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function inArray(mixed $value, array $values): mixed
{
    return Assert::inArray($value, $values);
}

/**
 * @psalm-pure
 */
function nullOrInArray(mixed $value, array $values): mixed
{
    return Assert::nullOrInArray($value, $values);
}

/**
 * @psalm-pure
 */
function allInArray(mixed $value, array $values): mixed
{
    return Assert::allInArray($value, $values);
}

/**
 * @psalm-pure
 */
function allNullOrInArray(mixed $value, array $values): mixed
{
    return Assert::allNullOrInArray($value, $values);
}
