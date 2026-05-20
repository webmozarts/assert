<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 */
function isInitialized(mixed $value, string $property): object
{
    return Assert::isInitialized($value, $property);
}
