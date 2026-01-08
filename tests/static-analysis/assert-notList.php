<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use stdClass;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return array<array-key, mixed>
 */
function notList(mixed $value): array
{
    Assert::notList($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param array<array-key, stdClass> $value
 *
 * @return array<array-key, stdClass>
 */
function isNotListWithKnownType(array $value): array
{
    Assert::notList($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return null|array<array-key, mixed>
 */
function nullOrIsNotList(mixed $value): ?array
{
    Assert::nullOrNotList($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return iterable<array-key, array<array-key, mixed>>
 */
function allNotList(mixed $value): iterable
{
    Assert::allNotList($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return iterable<array-key, null|array<array-key, mixed>>
 */
function allNullOrNotList(mixed $value): iterable
{
    Assert::allNullOrNotList($value);

    return $value;
}
