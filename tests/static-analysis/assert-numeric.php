<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @psalm-param mixed $value
 *
 * @psalm-return numeric
 */
function consume($value)
{
    Assert::numeric($value);

    return $value;
}
