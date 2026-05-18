<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

function ipv4(string $value): string
{
    Assert::ipv4($value);

    return $value;
}

function nullOrIpv4(?string $value): ?string
{
    Assert::nullOrIpv4($value);

    return $value;
}

/**
 * @param iterable<string> $value
 */
function allIpv4(iterable $value): iterable
{
    Assert::allIpv4($value);

    return $value;
}

/**
 * @param iterable<string|null> $value
 */
function allNullOrIpv4(iterable $value): iterable
{
    Assert::allNullOrIpv4($value);

    return $value;
}
