<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-param mixed $value
 *
 * @psalm-return class-string
 */
function consume($value): string
{
    Assert::classExists($value);

    return $value;
}
