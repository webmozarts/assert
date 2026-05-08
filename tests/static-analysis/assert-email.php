<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

function email(mixed $value): string
{
    return Assert::email($value);
}

function nullOrEmail(mixed $value): ?string
{
    return Assert::nullOrEmail($value);
}

/**
 * @return iterable<string>
 */
function allEmail(mixed $value): iterable
{
    return Assert::allEmail($value);
}

/**
 * @return iterable<string|null>
 */
function allNullOrEmail(mixed $value): iterable
{
    return Assert::allNullOrEmail($value);
}
