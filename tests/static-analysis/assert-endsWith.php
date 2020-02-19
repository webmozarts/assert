<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @psalm-param non-empty-string $value
 *
 * @psalm-return non-empty-string
 */
function consume($value): string
{
    Assert::endsWith($value, 'foo');

    return $value;
}
