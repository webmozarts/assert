<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

final class a extends Assert
{
}

/**
 * @psalm-pure
 */
function notNull(?object $value): object
{
    return Assert::notNull($value);
}

/**
 * @psalm-pure
 *
 * @param iterable<mixed|null> $value
 */
function allNotNull(iterable $value): iterable
{
    return Assert::allNotNull($value);
}

/**
 * @psalm-pure
 *
 * @param list<mixed> $value
 *
 * @return list<string>
 */
function allNotNullSpecialTest(iterable $value): iterable
{
    return a::allNotNull($value);
}
