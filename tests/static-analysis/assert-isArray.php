<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function isArray(mixed $value): array
{
    return Assert::isArray($value);
}

/**
 * @psalm-pure
 */
function nullOrIsArray(mixed $value): ?array
{
    return Assert::nullOrIsArray($value);
}

/**
 * @psalm-pure
 */
function allIsArray(mixed $value): iterable
{
    return Assert::allIsArray($value);
}

/**
 * @psalm-pure
 */
function allNullOrIsArray(mixed $value): iterable
{
    return Assert::allNullOrIsArray($value);
}
