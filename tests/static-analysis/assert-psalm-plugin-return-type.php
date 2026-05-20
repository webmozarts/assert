<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return numeric
 */
function returnedNumeric(mixed $value): int|float|string
{
    return Assert::numeric($value);
}

/**
 * @psalm-pure
 *
 * @return numeric
 */
function returnedIntegerish(mixed $value): int|float|string
{
    return Assert::integerish($value);
}
