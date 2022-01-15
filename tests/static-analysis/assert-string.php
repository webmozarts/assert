<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function string($value): string
{
    Assert::string($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrString($value): ?string
{
    Assert::nullOrString($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<string>
 */
function allString($value): iterable
{
    Assert::allString($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<string|null>
 */
function allNullOrString($value): iterable
{
    Assert::allNullOrString($value);

    return $value;
}
