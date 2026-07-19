<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use stdClass;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return list<stdClass>
 */
function isListOf(mixed $value): array
{
    return Assert::isListOf($value, stdClass::class);
}

/**
 * @psalm-pure
 *
 * @return null|list<stdClass>
 */
function nullOrIsListOf(mixed $value): ?array
{
    return Assert::nullOrIsListOf($value, stdClass::class);
}

/**
 * @psalm-pure
 */
function allIsListOf(mixed $value): iterable
{
    return Assert::allIsListOf($value, stdClass::class);
}

/**
 * @psalm-pure
 */
function allNullOrIsListOf(mixed $value): iterable
{
    return Assert::allNullOrIsListOf($value, stdClass::class);
}
