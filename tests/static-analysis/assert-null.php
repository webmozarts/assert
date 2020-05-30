<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return null
 */
function null($value)
{
    Assert::null($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<null>
 */
function allNull($value): iterable
{
    Assert::allNull($value);

    return $value;
}
