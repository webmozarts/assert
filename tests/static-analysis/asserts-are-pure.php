<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 * @param mixed $value
 */
function consume($value): void
{
    Assert::regex($value, '/.+/');
    Assert::email($value);
    Assert::ip($value);
    Assert::eq($value, '');
    Assert::isArrayAccessible($value);
    Assert::file($value);
    Assert::readable($value);
    Assert::stringNotEmpty($value);
    Assert::minLength($value, 1);
    Assert::maxLength($value, 1);
    Assert::notRegex($value, '');
    Assert::count($value, 0);
    Assert::alnum($value);
    Assert::alpha($value);
    Assert::contains($value, '');
    Assert::notContains($value, '');
}
