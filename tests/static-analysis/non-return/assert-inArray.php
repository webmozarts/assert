<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function inArray(mixed $value, array $values): mixed
{
    Assert::inArray($value, $values);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrInArray(mixed $value, array $values): mixed
{
    Assert::nullOrInArray($value, $values);

    return $value;
}

/**
 * @psalm-pure
 */
function allInArray(mixed $value, array $values): mixed
{
    Assert::allInArray($value, $values);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrInArray(mixed $value, array $values): mixed
{
    Assert::allNullOrInArray($value, $values);

    return $value;
}
