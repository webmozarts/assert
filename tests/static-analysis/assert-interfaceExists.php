<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;


/**
 * @param string $value
 *
 * @return string
 * @psalm-return class-string
 */
function consume($value): string
{
    Assert::interfaceExists($value);

    return $value;
}
