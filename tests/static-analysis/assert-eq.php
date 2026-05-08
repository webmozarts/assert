<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * 
 * @param mixed $expect
 */
function eq($value, $expect): mixed
{
    return Assert::eq($value, $expect);
}

/**
 * 
 * @param mixed $expect
 */
function nullOrEq($value, $expect): mixed
{
    return Assert::nullOrEq($value, $expect);
}

/**
 * 
 * @param mixed $expect
 */
function allEq($value, $expect): mixed
{
    return Assert::allEq($value, $expect);
}

/**
 * 
 * @param mixed $expect
 */
function allNullOrEq($value, $expect): mixed
{
    return Assert::allNullOrEq($value, $expect);
}
