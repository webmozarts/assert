<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

interface ImplementsInterfaceA
{
}

interface ImplementsInterfaceB extends ImplementsInterfaceA
{
}

interface ImplementsInterfaceC
{
}

/**
 * @param mixed $value
 *
 * @psalm-pure
 *
 * @psalm-return class-string<ImplementsInterfaceA> $value
 */
function consumeMixed($value): string
{
    Assert::implementsInterface($value, ImplementsInterfaceA::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @psalm-param class-string<ImplementsInterfaceB>|class-string<ImplementsInterfaceC> $value
 *
 * @psalm-return class-string<ImplementsInterfaceB> $value
 */
function consumeSubclass(string $value): string
{
    Assert::implementsInterface($value, ImplementsInterfaceB::class);

    return $value;
}
