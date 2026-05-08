<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

function email(string $value): string
{
    return Assert::email($value);
}

function nullOrEmail(?string $value): ?string
{
    return Assert::nullOrEmail($value);
}

/**
 * @param iterable<string> $value
 * @return iterable<string>
 */
function allEmail(mixed $value): iterable
{
    return Assert::allEmail($value);
}

/**
 * @param iterable<string|null> $value
 * @return iterable<string|null>
 */
function allNullOrEmail(mixed $value): iterable
{
    return Assert::allNullOrEmail($value);
}
