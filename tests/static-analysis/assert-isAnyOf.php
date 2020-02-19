<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

final class IsAnyOfA {}
final class IsAnyOfB {}

/**
 * @psalm-pure
 */
function consume(object $value): object
{
    Assert::isAnyOf($value, [IsAnyOfA::class, IsAnyOfB::class]);

    return $value;
}

