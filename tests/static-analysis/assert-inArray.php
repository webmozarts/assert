<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function inArray($value, array $values): mixed
{
    Assert::inArray($value, $values);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrInArray($value, array $values): mixed
{
    Assert::nullOrInArray($value, $values);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allInArray($value, array $values): mixed
{
    Assert::allInArray($value, $values);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrInArray($value, array $values): mixed
{
    Assert::allNullOrInArray($value, $values);

    return $value;
}
