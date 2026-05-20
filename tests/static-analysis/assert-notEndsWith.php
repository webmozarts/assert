<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function notEndsWith(string $value, string $suffix): string
{
    return Assert::notEndsWith($value, $suffix);
}

/**
 * @psalm-pure
 */
function nullOrNotEndsWith(?string $value, string $suffix): ?string
{
    return Assert::nullOrNotEndsWith($value, $suffix);
}

/**
 * @psalm-pure
 *
 * @param iterable<string> $value
 */
function allNotEndsWith(iterable $value, string $suffix): iterable
{
    return Assert::allNotEndsWith($value, $suffix);
}

/**
 * @psalm-pure
 *
 * @param iterable<string|null> $value
 */
function allNullOrNotEndsWith(iterable $value, string $suffix): iterable
{
    return Assert::allNullOrNotEndsWith($value, $suffix);
}
