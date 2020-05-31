<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param non-empty-string $value
 *
 * @return non-empty-string
 */
function lowerPreservesTypes(string $value): string
{
    Assert::lower($value);

    return $value;
}
