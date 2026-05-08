<?php

declare(strict_types=1);

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
function preserveContainerAllArray(mixed $value): iterable
{
    return Assert::allString($value);
}

/**
 * @psalm-pure
 *
 * @param ArrayIterator<string, mixed> $value
 *
 * @return ArrayIterator<string, string>
 */
function preserveContainerAllArrayIterator(mixed $value)
{
    return Assert::allString($value);
}
