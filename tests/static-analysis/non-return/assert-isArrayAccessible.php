<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use ArrayAccess;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return array|ArrayAccess
 */
function isArrayAccessible(mixed $value): array|ArrayAccess
{
    Assert::isArrayAccessible($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return null|array|ArrayAccess
 */
function nullOrIsArrayAccessible(mixed $value): array|ArrayAccess|null
{
    Assert::nullOrIsArrayAccessible($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return iterable<array|ArrayAccess>
 */
function allIsArrayAccessible(mixed $value): iterable
{
    Assert::allIsArrayAccessible($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return iterable<array|ArrayAccess|null>
 */
function allNullOrIsArrayAccessible(mixed $value): iterable
{
    Assert::allNullOrIsArrayAccessible($value);

    return $value;
}
