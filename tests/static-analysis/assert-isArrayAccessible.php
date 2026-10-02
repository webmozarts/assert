<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use ArrayAccess;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return array|ArrayAccess
 */
function isArrayAccessible(mixed $value): array|ArrayAccess
{
    return Assert::isArrayAccessible($value);
}

/**
 * @psalm-pure
 *
 * @return null|array|ArrayAccess
 */
function nullOrIsArrayAccessible(mixed $value): array|ArrayAccess|null
{
    return Assert::nullOrIsArrayAccessible($value);
}

/**
 * @psalm-pure
 *
 * @return iterable<array|ArrayAccess>
 */
function allIsArrayAccessible(mixed $value): iterable
{
    return Assert::allIsArrayAccessible($value);
}

/**
 * @psalm-pure
 *
 * @return iterable<array|ArrayAccess|null>
 */
function allNullOrIsArrayAccessible(mixed $value): iterable
{
    return Assert::allNullOrIsArrayAccessible($value);
}
