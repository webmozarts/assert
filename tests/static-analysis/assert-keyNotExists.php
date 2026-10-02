<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param array-key $key
 */
function keyNotExists(array $array, $key): array
{
    return Assert::keyNotExists($array, $key);
}

/**
 * @psalm-pure
 *
 * @param array-key $key
 */
function nullOrKeyNotExists(?array $array, $key): ?array
{
    return Assert::nullOrKeyNotExists($array, $key);
}

/**
 * @psalm-pure
 *
 * @param iterable<array> $array
 * @param array-key $key
 * @return iterable<array>
 */
function allKeyNotExists(iterable $array, $key): iterable
{
    return Assert::allKeyNotExists($array, $key);
}

/**
 * @psalm-pure
 *
 * @param iterable<array|null> $array
 * @param array-key $key
 * @return iterable<array|null>
 */
function allNullOrKeyNotExists(iterable $array, $key): iterable
{
    return Assert::allNullOrKeyNotExists($array, $key);
}
