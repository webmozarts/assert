<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use stdClass;
use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return list<stdClass>
 */
function isListOf(mixed $value): array
{
    Assert::isListOf($value, stdClass::class);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return null|list<stdClass>
 */
function nullOrIsListOf(mixed $value): ?array
{
    Assert::nullOrIsListOf($value, stdClass::class);

    return $value;
}

/**
 * @psalm-pure
 */
function allIsListOf(mixed $value): iterable
{
    Assert::allIsListOf($value, stdClass::class);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrIsListOf(mixed $value): iterable
{
    Assert::allNullOrIsListOf($value, stdClass::class);

    return $value;
}
