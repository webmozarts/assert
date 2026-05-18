<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function startsWithLetter(mixed $value, string $prefix): mixed
{
    return Assert::startsWithLetter($value, $prefix);
}

/**
 * @psalm-pure
 */
function nullOrStartsWithLetter(mixed $value, string $prefix): mixed
{
    return Assert::nullOrStartsWithLetter($value, $prefix);
}

/**
 * @psalm-pure
 */
function allStartsWithLetter(mixed $value, string $prefix): mixed
{
    return Assert::allStartsWithLetter($value, $prefix);
}

/**
 * @psalm-pure
 */
function allNullOrStartsWithLetter(mixed $value, string $prefix): mixed
{
    return Assert::allNullOrStartsWithLetter($value, $prefix);
}
