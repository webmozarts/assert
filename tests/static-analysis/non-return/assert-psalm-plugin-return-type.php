<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return numeric
 */
function returnedNumeric(mixed $value): int|float|string
{
    Assert::numeric($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return numeric
 */
function returnedIntegerish(mixed $value): int|float|string
{
    Assert::integerish($value);

    return $value;
}
