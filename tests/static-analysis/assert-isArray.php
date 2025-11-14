<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function isArray(mixed $value): array
{
    Assert::isArray($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrIsArray(mixed $value): ?array
{
    Assert::nullOrIsArray($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allIsArray(mixed $value): iterable
{
    Assert::allIsArray($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrIsArray(mixed $value): iterable
{
    Assert::allNullOrIsArray($value);

    return $value;
}
