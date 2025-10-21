<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function string(mixed $value): string
{
    Assert::string($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrString(mixed $value): ?string
{
    Assert::nullOrString($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allString(mixed $value): iterable
{
    Assert::allString($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function allNullOrString(mixed $value): iterable
{
    Assert::allNullOrString($value);

    return $value;
}
