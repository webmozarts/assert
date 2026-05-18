<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function isArray(mixed $value): array
{
    Assert::isArray($value);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrIsArray(mixed $value): ?array
{
    Assert::nullOrIsArray($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allIsArray(mixed $value): iterable
{
    Assert::allIsArray($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrIsArray(mixed $value): iterable
{
    Assert::allNullOrIsArray($value);

    return $value;
}
