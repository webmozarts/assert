<?php

declare(strict_types=1);

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
    return Assert::lower($value);
}
