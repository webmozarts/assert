<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param null|string $type
 *
 * @return resource
 */
function resource($value, $type)
{
    Assert::resource($value, $type);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param null|string $type
 *
 * @return null|resource
 */
function nullOrResource($value, $type)
{
    Assert::nullOrResource($value, $type);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 * @param null|string $type
 *
 * @return iterable<resource>
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
 *
 * @return iterable<resource|null>
 */
function allNullOrResource($value, $type): iterable
{
    Assert::allNullOrResource($value, $type);

    return $value;
}
