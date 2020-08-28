<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function keysInteger($value): iterable
{
    Assert::keysInteger($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 */
function nullOrkeysInteger($value): ?iterable
{
    Assert::nullOrkeysInteger($value);

    return $value;
}

/**
 * @psalm-pure
 *
 * @param mixed $value
 *
 * @return iterable<iterable>
 */
function allkeysInteger($value): iterable
{
    Assert::allkeysInteger($value);

    return $value;
}
