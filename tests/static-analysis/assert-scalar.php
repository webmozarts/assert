<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-param \Exception|bool $value
 */
function consume($value): bool
{
    Assert::scalar($value);

    return $value;
}
