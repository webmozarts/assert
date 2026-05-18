<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use stdClass;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return list<mixed>
 */
function isList(mixed $value): array
{
    return Assert::isList($value);
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
    return Assert::isList($value);
}

/**
 * @psalm-pure
 *
 * @return null|list<mixed>
 */
function nullOrIsList(mixed $value): ?array
{
    return Assert::nullOrIsList($value);
}

/**
 * @psalm-pure
 */
function allIsList(mixed $value): iterable
{
    return Assert::allIsList($value);
}

/**
 * @psalm-pure
 */
function allNullOrIsList(mixed $value): iterable
{
    return Assert::allNullOrIsList($value);
}
