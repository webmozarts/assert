<?php

namespace Webmozart\Assert\StaticAnalysis\AssertString;

use Webmozart\Assert\Assert;

/**
 * @psalm-param mixed $value
 */
function consume($value): array
{
    Assert::isArray($value);

    return $value;
}
