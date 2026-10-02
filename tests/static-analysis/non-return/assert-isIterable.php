<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function isIterable(mixed $value): iterable
{
    Assert::isIterable($value);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrIsIterable(mixed $value): ?iterable
{
    Assert::nullOrIsIterable($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return iterable<iterable>
 */
function allIsIterable(mixed $value): iterable
{
    Assert::allIsIterable($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return iterable<iterable|null>
 */
function allNullOrIsIterable(mixed $value): iterable
{
    Assert::allNullOrIsIterable($value);

    return $value;
}
