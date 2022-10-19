<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param non-empty-lowercase-string $value
 *
 * @return non-empty-lowercase-string
 */
function lowerPreservesTypes(string $value): string
{
    Assert::lower($value);

    return $value;
}
