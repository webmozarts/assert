<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @param null|string $type
 * @return resource
 */
function resource(mixed $value, ?string $type): mixed
{
    return Assert::resource($value, $type);
}

/**
 * @psalm-pure
 * @param null|string $type
 * @return null|resource
 */
function nullOrResource(mixed $value, ?string $type): mixed
{
    return Assert::nullOrResource($value, $type);
}

/**
 * @psalm-pure
 * @param null|string $type
 * @return iterable<resource>
 */
function allResource(mixed $value, $type): iterable
{
    return Assert::allResource($value, $type);
}

/**
 * @psalm-pure
 * @param null|string $type
 * @return iterable<resource|null>
 */
function allNullOrResource(mixed $value, $type): iterable
{
    return Assert::allNullOrResource($value, $type);
}
