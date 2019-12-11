<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

class SubclassOfA
{
}

class SubclassOfB extends SubclassOfA
{
}

class SubclassOfC
{
}

/**
 * @param mixed $value
 *
 * @psalm-pure
 * @psalm-return class-string<SubclassOfA> $value
 */
function consumeMixed($value): string
{
    Assert::subclassOf($value, SubclassOfA::class);

    return $value;
}

/**
 * @psalm-pure
 * @psalm-param class-string<SubclassOfB>|class-string<SubclassOfC> $value
 *
 * @psalm-return class-string<SubclassOfB> $value
 */
function consumeSubInterface(string $value): string
{
    Assert::subclassOf($value, SubclassOfA::class);

    return $value;
}
