<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @psalm-param mixed $value
 *
 * @psalm-return array-key
 */
function consume($value)
{
    Assert::validArrayKey($value);

    return $value;
}
