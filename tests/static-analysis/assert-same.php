<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use stdClass;
use Webmozart\Assert\Assert;

/**
 * @psalm-param mixed $value
 */
function consume($value): string
{
    Assert::same($value, 'foo');

    return $value;
}

/**
 * @psalm-param mixed $value
 */
function consumeWillInferObject($value): stdClass
{
    Assert::same($value, new stdClass());

    return $value;
}

/**
 * @psalm-param mixed $value
 */
function consumeWillInferArray($value): array
{
    Assert::same($value, ['foo' => 123]);

    return $value;
}
