<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function null(mixed $value): null
{
    Assert::null($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNull(mixed $value): iterable
{
    Assert::allNull($value);

    return $value;
}
