<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param array-key $key
 */
function keyNotExists(array $array, $key): array
{
    Assert::keyNotExists($array, $key);

    return $array;
}

/**
 * @psalm-pure
 *
 * @param array-key $key
 */
function nullOrKeyNotExists(?array $array, $key): ?array
{
    Assert::nullOrKeyNotExists($array, $key);

    return $array;
}

/**
 * @psalm-pure
 *
 * @param iterable<array> $array
 * @param array-key $key
 *
 * @return iterable<array>
 */
function allKeyNotExists(iterable $array, $key): iterable
{
    Assert::allKeyNotExists($array, $key);

    return $array;
}

/**
 * @psalm-pure
 *
 * @param iterable<array|null> $array
 * @param array-key $key
 *
 * @return iterable<array|null>
 */
function allNullOrKeyNotExists(iterable $array, $key): iterable
{
    Assert::allNullOrKeyNotExists($array, $key);

    return $array;
}
