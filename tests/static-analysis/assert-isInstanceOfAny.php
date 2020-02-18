<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

final class IsInstanceOfAnyA {}
final class IsInstanceOfAnyB {}

/**
 * @psalm-pure
 */
function consume(object $value): object
{
    Assert::isInstanceOfAny($value, [IsInstanceOfAnyA::class, IsInstanceOfAnyB::class]);

    return $value;
}

