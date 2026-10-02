<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @param null|string $type
 * @return resource
 */
function resource(mixed $value, ?string $type): mixed
{
    Assert::resource($value, $type);

    return $value;
}

/**
 * @psalm-pure
 * @param null|string $type
 * @return null|resource
 */
function nullOrResource(mixed $value, ?string $type): mixed
{
    Assert::nullOrResource($value, $type);

    return $value;
}

/**
 * @psalm-pure
 * @param null|string $type
 * @return iterable<resource>
 */
function allResource(mixed $value, $type): iterable
{
    Assert::allResource($value, $type);

    return $value;
}

/**
 * @psalm-pure
 * @param null|string $type
 * @return iterable<resource|null>
 */
function allNullOrResource(mixed $value, $type): iterable
{
    Assert::allNullOrResource($value, $type);

    return $value;
}
