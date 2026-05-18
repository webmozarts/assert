<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function notEndsWith(string $value, string $suffix): string
{
    Assert::notEndsWith($value, $suffix);

    return $value;
}

/**
 * @psalm-pure
 */
function nullOrNotEndsWith(?string $value, string $suffix): ?string
{
    Assert::nullOrNotEndsWith($value, $suffix);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 */
function allNotEndsWith(iterable $value, string $suffix): iterable
{
    Assert::allNotEndsWith($value, $suffix);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 */
function allNullOrNotEndsWith(iterable $value, string $suffix): iterable
{
    Assert::allNullOrNotEndsWith($value, $suffix);

    return $value;
}
