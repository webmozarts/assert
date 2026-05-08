<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function inArray($value, array $values): mixed
{
    return Assert::inArray($value, $values);
}

/**
 * @psalm-pure
 */
function nullOrInArray($value, array $values): mixed
{
    return Assert::nullOrInArray($value, $values);
}

/**
 * @psalm-pure
 */
function allInArray($value, array $values): mixed
{
    return Assert::allInArray($value, $values);
}

/**
 * @psalm-pure
 */
function allNullOrInArray($value, array $values): mixed
{
    return Assert::allNullOrInArray($value, $values);
}
