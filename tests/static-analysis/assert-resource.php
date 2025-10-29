<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param null|string $type
 */
function resource(mixed $value, null|string $type): mixed
{
    Assert::resource($value, $type);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param null|string $type
 */
function nullOrResource(mixed $value, null|string $type): mixed
{
    Assert::nullOrResource($value, $type);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param null|string $type
 */
function allResource($value, $type): iterable
{
    Assert::allResource($value, $type);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param null|string $type
 */
function allNullOrResource($value, $type): iterable
{
    Assert::allNullOrResource($value, $type);

    return $value;
}
