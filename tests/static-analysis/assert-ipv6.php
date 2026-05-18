<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

function ipv6(string $value): string
{
    return Assert::ipv6($value);
}

function nullOrIpv6(?string $value): ?string
{
    return Assert::nullOrIpv6($value);
}

/**
 * @param iterable<string> $value
 */
function allIpv6(iterable $value): iterable
{
    return Assert::allIpv6($value);
}

/**
 * @param iterable<string|null> $value
 */
function allNullOrIpv6(iterable $value): iterable
{
    return Assert::allNullOrIpv6($value);
}
