<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return mixed
 */
function consume($value)
{
    Assert::same($value, 'foo');

    return $value;
}
