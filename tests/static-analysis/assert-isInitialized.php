<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param object $value
 */
function isInitialized(mixed $value, string $property): object
{
    Assert::isInitialized($value, $property);

    return $value;
}
