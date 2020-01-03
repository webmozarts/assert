<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @psalm-param mixed $value
 */
function consume($value): string
{
    Assert::string($value);

    return $value;
}
