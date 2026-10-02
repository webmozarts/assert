<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return null
 */
function null(mixed $value): null
{
    return Assert::null($value);
}

/**
 * @psalm-pure
 *
 * @return iterable<null>
 */
function allNull(mixed $value): iterable
{
    return Assert::allNull($value);
}
