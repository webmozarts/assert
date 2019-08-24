<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-param mixed $value
 *
 * @return resource
 */
function consume($value)
{
    Assert::resource($value);

    return $value;
}
