<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @see https://github.com/webmozart/assert/pull/160#issuecomment-564491986
 * @see https://github.com/vimeo/psalm/commit/4b715cdbffea19a7eab6f72482027d2dd358aab2
 * @see https://github.com/vimeo/psalm/issues/2456
 */
function stringWillNotBeRedundantIfAssertingAndNotUsingEither(mixed $value): string
{
    Assert::string($value);

    return $value;
}
