<?php

namespace Webmozart\Assert\StaticAnalysis\AssertString;

use Webmozart\Assert\Assert;

/**
 * @psalm-param \Exception|bool $value
 */
function consume($value): bool
{
    Assert::scalar($value);

    return $value;
}
