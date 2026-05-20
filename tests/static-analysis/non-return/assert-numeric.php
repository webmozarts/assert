<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @return numeric
 */
function numeric(mixed $value)
{
    Assert::numeric($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @return null|numeric
 */
function nullOrNumeric(mixed $value)
{
    Assert::nullOrNumeric($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allNumeric(mixed $value): iterable
{
    Assert::allNumeric($value);

    return $value;
}

/**
 * @psalm-pure
 */
function allNullOrNumeric(mixed $value): iterable
{
    Assert::allNullOrNumeric($value);

    return $value;
}
