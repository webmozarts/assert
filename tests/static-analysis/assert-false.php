<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @param mixed $value
 */
function consume($value): bool
{
    Assert::false($value);

    return $value;
}
