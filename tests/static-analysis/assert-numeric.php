<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return numeric
 */
function numeric(mixed $value)
{
    return Assert::numeric($value);
}

/**
 * @psalm-pure
 *
 * @return null|numeric
 */
function nullOrNumeric(mixed $value)
{
    return Assert::nullOrNumeric($value);
}

/**
 * @psalm-pure
 */
function allNumeric(mixed $value): iterable
{
    return Assert::allNumeric($value);
}

/**
 * @psalm-pure
 */
function allNullOrNumeric(mixed $value): iterable
{
    return Assert::allNullOrNumeric($value);
}
