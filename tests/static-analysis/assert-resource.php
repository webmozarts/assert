<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @param null|string $type
 */
function resource(mixed $value, ?string $type): mixed
{
    return Assert::resource($value, $type);
}

/**
 * @psalm-pure
 * @param null|string $type
 */
function nullOrResource(mixed $value, ?string $type): mixed
{
    return Assert::nullOrResource($value, $type);
}

/**
 * @psalm-pure
 * @param null|string $type
 */
function allResource(mixed $value, $type): iterable
{
    return Assert::allResource($value, $type);
}

/**
 * @psalm-pure
 * @param null|string $type
 */
function allNullOrResource(mixed $value, $type): iterable
{
    return Assert::allNullOrResource($value, $type);
}
