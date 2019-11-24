<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-param mixed $value
 *
 * @psalm-return non-empty-list<mixed>
 */
function consume($value): array
{
    Assert::isNonEmptyList($value);

    return $value;
}
