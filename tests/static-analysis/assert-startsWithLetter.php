<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function startsWithLetter($value, string $prefix): mixed
{
    return Assert::startsWithLetter($value, $prefix);
}

/**
 * @psalm-pure
 */
function nullOrStartsWithLetter($value, string $prefix): mixed
{
    return Assert::nullOrStartsWithLetter($value, $prefix);
}

/**
 * @psalm-pure
 */
function allStartsWithLetter($value, string $prefix): mixed
{
    return Assert::allStartsWithLetter($value, $prefix);
}

/**
 * @psalm-pure
 */
function allNullOrStartsWithLetter($value, string $prefix): mixed
{
    return Assert::allNullOrStartsWithLetter($value, $prefix);
}
