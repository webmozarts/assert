<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return list<mixed>
 */
function isList($value): array
{
    Assert::isList($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param array<\stdClass> $value
 *
 * @return list<\stdClass>
 */
function isListWithKnownType(array $value): array
{
    Assert::isList($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return null|list<mixed>
 */
function nullOrIsList($value): ?array
{
    Assert::nullOrIsList($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<list<mixed>>
 */
function allIsList($value): iterable
{
    Assert::allIsList($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<list<mixed>|null>
 */
function allNullOrIsList($value): iterable
{
    Assert::allNullOrIsList($value);

    return $value;
}
