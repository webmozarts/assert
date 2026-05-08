<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function string(mixed $value): string
{
    return Assert::string($value);
}

/**
 * @psalm-pure
 */
function nullOrString(mixed $value): ?string
{
    return Assert::nullOrString($value);
}

/**
 * @psalm-pure
 */
function allString(mixed $value): iterable
{
    return Assert::allString($value);
}

/**
 * @psalm-pure
 */
function allNullOrString(mixed $value): iterable
{
    return Assert::allNullOrString($value);
}
