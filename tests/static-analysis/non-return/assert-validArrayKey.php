<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return array-key
 */
function validArrayKey(mixed $value)
{
    Assert::validArrayKey($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return null|array-key
 */
function nullOrValidArrayKey(mixed $value)
{
    Assert::nullOrValidArrayKey($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allValidArrayKey(mixed $value): iterable
{
    Assert::allValidArrayKey($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrValidArrayKey(mixed $value): iterable
{
    Assert::allNullOrValidArrayKey($value);

    return $value;
}
