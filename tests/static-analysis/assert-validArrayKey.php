<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return array-key
 */
function validArrayKey(mixed $value)
{
    return Assert::validArrayKey($value);
}

/**
 * @psalm-pure
 *
 * @return null|array-key
 */
function nullOrValidArrayKey(mixed $value)
{
    return Assert::nullOrValidArrayKey($value);
}

/**
 * @psalm-pure
 */
function allValidArrayKey(mixed $value): iterable
{
    return Assert::allValidArrayKey($value);
}

/**
 * @psalm-pure
 */
function allNullOrValidArrayKey(mixed $value): iterable
{
    return Assert::allNullOrValidArrayKey($value);
}
