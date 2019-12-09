<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

class A
{
}

class B extends A
{
}

class C
{
}

/**
 * @param mixed $value
 *
 * @psalm-return class-string<A> $value
 */
function consumeMixed($value): string
{
    Assert::subclassOf($value, A::class);

    return $value;
}

/**
 * @psalm-param class-string<B>|class-string<C> $value
 *
 * @psalm-return class-string<B> $value
 */
function consumeSubclass(string $value): string
{
    Assert::subclassOf($value, A::class);

    return $value;
}
