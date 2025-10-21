<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use ArrayAccess;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function isArrayAccessible(mixed $value): array|ArrayAccess {
    Assert::isArrayAccessible($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrIsArrayAccessible(mixed $value): null|array|ArrayAccess {
    Assert::nullOrIsArrayAccessible($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allIsArrayAccessible(mixed $value): iterable
{
    Assert::allIsArrayAccessible($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrIsArrayAccessible(mixed $value): iterable
{
    Assert::allNullOrIsArrayAccessible($value);

    return $value;
}
