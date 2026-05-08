<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

function ip(string $value): string
{
    return Assert::ip($value);
}

function nullOrIp(?string $value): ?string
{
    return Assert::nullOrIp($value);
}

/**
 * @param iterable<string> $value
 */
function allIp(iterable $value): iterable
{
    return Assert::allIp($value);
}

/**
 * @param iterable<string|null> $value
 */
function allNullOrIp(iterable $value): iterable
{
    return Assert::allNullOrIp($value);
}
