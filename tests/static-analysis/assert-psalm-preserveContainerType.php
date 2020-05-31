<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use ArrayIterator;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed[] $value
 *
 * @return string[]
 */
function preserveContainerAllArray($value): iterable
{
    Assert::allString($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param ArrayIterator<string, mixed> $value
 *
 * @return ArrayIterator<string, string>
 */
function preserveContainerAllArrayIterator($value)
{
    Assert::allString($value);

    return $value;
}
