<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use ArrayAccess;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function isArrayAccessible(mixed $value): array|ArrayAccess
{
    return Assert::isArrayAccessible($value);
}

/**
 * @psalm-pure
 */
function nullOrIsArrayAccessible(mixed $value): array|ArrayAccess|null
{
    return Assert::nullOrIsArrayAccessible($value);
}

/**
 * @psalm-pure
 */
function allIsArrayAccessible(mixed $value): iterable
{
    return Assert::allIsArrayAccessible($value);
}

/**
 * @psalm-pure
 */
function allNullOrIsArrayAccessible(mixed $value): iterable
{
    return Assert::allNullOrIsArrayAccessible($value);
}
