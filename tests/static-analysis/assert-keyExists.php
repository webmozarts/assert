<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param array-key $key
 */
function keyExists(array $array, $key): array
{
    Assert::keyExists($array, $key);

    return $array;
}

/**
 * @psalm-pure
 *
 * @param array-key $key
 */
function nullOrKeyExists(?array $array, $key): ?array
{
    Assert::nullOrKeyExists($array, $key);

    return $array;
}

/**
 * @psalm-pure
 *
 * @param iterable<array> $array
 * @param array-key $key
 */
function allKeyExists(iterable $array, $key): iterable
{
    Assert::allKeyExists($array, $key);

    return $array;
}

/**
 * @psalm-pure
 *
 * @param iterable<array|null> $array
 * @param array-key $key
 */
function allNullOrKeyExists(iterable $array, $key): iterable
{
    Assert::allNullOrKeyExists($array, $key);

    return $array;
}
