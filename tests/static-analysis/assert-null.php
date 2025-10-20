<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function null($value): null {
    Assert::null($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNull($value): iterable
{
    Assert::allNull($value);

    return $value;
}
