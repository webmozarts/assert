<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function notNull(?object $value): object
{
    Assert::notNull($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNotNull(mixed $value): mixed
{
    Assert::allNotNull($value);

    return $value;
}
