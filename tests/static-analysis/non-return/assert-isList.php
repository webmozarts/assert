<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use stdClass;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return list<mixed>
 */
function isList(mixed $value): array
{
    Assert::isList($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param array<stdClass> $value
 *
 * @return list<stdClass>
 */
function isListWithKnownType(array $value): array
{
    Assert::isList($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return null|list<mixed>
 */
function nullOrIsList(mixed $value): ?array
{
    Assert::nullOrIsList($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allIsList(mixed $value): iterable
{
    Assert::allIsList($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrIsList(mixed $value): iterable
{
    Assert::allNullOrIsList($value);

    return $value;
}
