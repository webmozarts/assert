<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return null
 */
function null(mixed $value): null
{
    Assert::null($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return iterable<null>
 */
function allNull(mixed $value): iterable
{
    Assert::allNull($value);

    return $value;
}
