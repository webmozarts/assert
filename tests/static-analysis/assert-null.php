<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @return null
 */
function consume(?object $value)
{
    Assert::null($value);

    return $value;
}
