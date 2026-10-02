<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function string(mixed $value): string
{
    Assert::string($value);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrString(mixed $value): ?string
{
    Assert::nullOrString($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return iterable<string>
 */
function allString(mixed $value): iterable
{
    Assert::allString($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return iterable<string|null>
 */
function allNullOrString(mixed $value): iterable
{
    Assert::allNullOrString($value);

    return $value;
}
