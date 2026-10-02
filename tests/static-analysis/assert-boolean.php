<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function boolean(mixed $value): bool
{
    return Assert::boolean($value);
}

/**
 * @psalm-pure
 */
function nullOrBoolean(mixed $value): ?bool
{
    return Assert::nullOrBoolean($value);
}

/**
 * @psalm-pure
 *
 * @return iterable<bool>
 */
function allBoolean(mixed $value): iterable
{
    return Assert::allBoolean($value);
}

/**
 * @psalm-pure
 *
 * @return iterable<bool|null>
 */
function allNullOrBoolean(mixed $value): iterable
{
    return Assert::allNullOrBoolean($value);
}
