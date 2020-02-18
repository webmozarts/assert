<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @param non-empty-array $array
 * @param array-key $key
 *
 * @return non-empty-array
 */
function consume(array $array, $key): array
{
    Assert::keyExists($array, 'key');

    return $array;
}
