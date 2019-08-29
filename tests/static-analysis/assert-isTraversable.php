<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-param mixed $value
 */
function consume($value): iterable
{
    /** @psalm-suppress DeprecatedMethod */
    Assert::isTraversable($value);

    return $value;
}
