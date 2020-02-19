<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

final class IsNotAA
{
}

final class IsNotAB
{
}

/**
 * @psalm-pure
 *
 * @psalm-param IsNotAA|IsNotAB $value
 */
function consume(object $value): IsNotAA
{
    Assert::isNotA($value, IsNotAB::class);

    return $value;
}
