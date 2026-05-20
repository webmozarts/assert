<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

function ip(string $value): string
{
    Assert::ip($value);

    return $value;
}

function nullOrIp(?string $value): ?string
{
    Assert::nullOrIp($value);

    return $value;
}

/**
 * @param iterable<string> $value
 */
function allIp(iterable $value): iterable
{
    Assert::allIp($value);

    return $value;
}

/**
 * @param iterable<string|null> $value
 */
function allNullOrIp(iterable $value): iterable
{
    Assert::allNullOrIp($value);

    return $value;
}
