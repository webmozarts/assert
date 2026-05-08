<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

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
 * @param iterable<mixed|null> $value
 */
function allNotNull(iterable $value): iterable
{
    Assert::allNotNull($value);

    return $value;
}
