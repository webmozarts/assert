<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

function email(string $value): string
{
    Assert::email($value);

    return $value;
}

function nullOrEmail(?string $value): ?string
{
    Assert::nullOrEmail($value);

    return $value;
}

/**
 * @param iterable<string> $value
 * @return iterable<string>
 */
function allEmail(mixed $value): iterable
{
    Assert::allEmail($value);

    return $value;
}

/**
 * @param iterable<string|null> $value
 * @return iterable<string|null>
 */
function allNullOrEmail(mixed $value): iterable
{
    Assert::allNullOrEmail($value);

    return $value;
}
