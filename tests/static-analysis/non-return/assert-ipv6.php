<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

function ipv6(string $value): string
{
    Assert::ipv6($value);

    return $value;
}

function nullOrIpv6(?string $value): ?string
{
    Assert::nullOrIpv6($value);

    return $value;
}

/**
 * @param iterable<string> $value
 */
function allIpv6(iterable $value): iterable
{
    Assert::allIpv6($value);

    return $value;
}

/**
 * @param iterable<string|null> $value
 */
function allNullOrIpv6(iterable $value): iterable
{
    Assert::allNullOrIpv6($value);

    return $value;
}
