<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

function ipv4(string $value): string
{
    return Assert::ipv4($value);
}

function nullOrIpv4(?string $value): ?string
{
    return Assert::nullOrIpv4($value);
}

/**
 * @param iterable<string> $value
 */
function allIpv4(iterable $value): iterable
{
    return Assert::allIpv4($value);
}

/**
 * @param iterable<string|null> $value
 */
function allNullOrIpv4(iterable $value): iterable
{
    return Assert::allNullOrIpv4($value);
}
