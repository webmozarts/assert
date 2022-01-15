<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @psalm-return positive-int|0
 */
function natural($value): int
{
    Assert::natural($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @psalm-return positive-int|0|null
 */
function nullOrNatural($value): ?int
{
    Assert::nullOrNatural($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<positive-int|0>
 *
 * @psalm-suppress MixedInferredReturnType https://github.com/vimeo/psalm/issues/5052
 * @psalm-suppress MixedReturnStatement https://github.com/vimeo/psalm/issues/5052
 */
function allNatural($value): iterable
{
    Assert::allNatural($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<positive-int|0|null>
 *
 * @psalm-suppress MixedInferredReturnType https://github.com/vimeo/psalm/issues/5052
 * @psalm-suppress MixedReturnStatement https://github.com/vimeo/psalm/issues/5052
 */
function allNullOrNatural($value): iterable
{
    Assert::allNullOrNatural($value);

    return $value;
}
