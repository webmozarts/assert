<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param iterable<array-key> $keys
 */
function keysExist(array $array, iterable $keys): array
{
    return Assert::keysExist($array, $keys);
}

/**
 * @psalm-pure
 *
 * @param iterable<array-key> $keys
 */
function nullOrKeysExist(?array $array, iterable $keys): ?array
{
    return Assert::nullOrKeysExist($array, $keys);
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
    return Assert::allKeysExist($array, $keys);
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
    return Assert::allNullOrKeysExist($array, $keys);
}
