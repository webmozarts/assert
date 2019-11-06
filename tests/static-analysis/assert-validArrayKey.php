<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-param mixed $value
 * @param array<int> $array
 *
 * @return array<int>
 */
function consume($value, array $array): array
{
    Assert::validArrayKey($value);

    $array[$value] = 12;

    return $array;
}
