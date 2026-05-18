<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function isInitialized(mixed $value, string $property): object
{
    Assert::isInitialized($value, $property);

    return $value;
}
