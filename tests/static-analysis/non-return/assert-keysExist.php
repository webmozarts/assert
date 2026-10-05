<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param iterable<array-key> $keys
 */
function keysExist(array $array, iterable $keys): array
{
    Assert::keysExist($array, $keys);

    return $array;
}

/**
 * @psalm-pure
 *
 * @param iterable<array-key> $keys
 */
function nullOrKeysExist(?array $array, iterable $keys): ?array
{
    Assert::nullOrKeysExist($array, $keys);

    return $array;
}

/**
 * @psalm-pure
 *
 * @param iterable<array> $array
 * @param iterable<array-key> $keys
 * @return iterable<array>
 */
function allKeysExist(iterable $array, iterable $keys): iterable
{
    Assert::allKeysExist($array, $keys);

    return $array;
}

/**
 * @psalm-pure
 *
 * @param iterable<array|null> $array
 * @param iterable<array-key> $keys
 * @return iterable<array|null>
 */
function allNullOrKeysExist(iterable $array, iterable $keys): iterable
{
    Assert::allNullOrKeysExist($array, $keys);

    return $array;
}
