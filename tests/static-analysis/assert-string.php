<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @psalm-param mixed $value
 */
function consume($value): string
{
    Assert::string($value);

    return $value;
}

/**
 * @psalm-pure
 * @psalm-param mixed $value
 *
 * @see https://github.com/webmozart/assert/pull/160#issuecomment-564491986
 * @see https://github.com/vimeo/psalm/commit/4b715cdbffea19a7eab6f72482027d2dd358aab2
 * @see https://github.com/vimeo/psalm/issues/2456
 */
function consumeWillNotBeRedundantIfAssertingAndNotUsingEither($value): bool
{
    Assert::string($value);

    return true;
}
