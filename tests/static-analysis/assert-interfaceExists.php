<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;


/**
 * @param class-string $value
 *
 * @psalm-return class-string
 */
function consume($value): string
{
    Assert::interfaceExists($value);

    return $value;
}
