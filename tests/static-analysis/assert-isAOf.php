<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

interface IsAOfA
{
}

/**
 * @psalm-pure
 *
 * @psalm-param string|object $value
 *
 * @psalm-return class-string<IsAOfA>|IsAOfA
 */
function consume($value)
{
    Assert::isAOf($value, IsAOfA::class);

    return $value;
}
