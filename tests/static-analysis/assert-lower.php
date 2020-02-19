<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @psalm-param non-empty-string $value
 *
 * @psalm-return lowercase-string
 */
function consume(string $value): string
{
    Assert::lower($value);

    return $value;
}

/**
 * @psalm-pure
 * @psalm-param non-empty-string $value
 *
 * @psalm-return non-empty-string
 */
function consumePreservesTypes(string $value): string
{
    Assert::lower($value);

    return $value;
}
