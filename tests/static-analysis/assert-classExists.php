<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;


/**
 * @psalm-pure
 *
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
