<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-param mixed $value
 */
function consume($value): bool
{
    Assert::boolean($value);

    return $value;
}
