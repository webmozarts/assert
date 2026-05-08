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
    return Assert::keyExists($array, $key);
}

/**
 * @psalm-pure
 *
 * @param array-key $key
 */
function nullOrKeyExists(?array $array, $key): ?array
{
    return Assert::nullOrKeyExists($array, $key);
}

/**
 * @psalm-pure
 *
 * @param iterable<array> $array
 * @param array-key $key
 */
function allKeyExists(iterable $array, $key): iterable
{
    return Assert::allKeyExists($array, $key);
}

/**
 * @psalm-pure
 *
 * @param iterable<array|null> $array
 * @param array-key $key
 */
function allNullOrKeyExists(iterable $array, $key): iterable
{
    return Assert::allNullOrKeyExists($array, $key);
}
