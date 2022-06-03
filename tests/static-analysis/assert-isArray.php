<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function isArray($value): array
{
    Assert::isArray($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrIsArray($value): ?array
{
    Assert::nullOrIsArray($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<array>
 */
function allIsArray($value): iterable
{
    Assert::allIsArray($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<array|null>
 */
function allNullOrIsArray($value): iterable
{
    Assert::allNullOrIsArray($value);

    return $value;
}
