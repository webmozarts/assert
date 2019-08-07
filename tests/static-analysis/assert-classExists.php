<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;


/**
 * @param mixed $value
 *
 * @return string
 * @psalm-return class-string
 */
function consume($value): string
{
    Assert::classExists($value);

    return $value;
}
