<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @param mixed $value
 *
 * @return mixed
 */
function fileExists($value)
{
    Assert::fileExists($value);

    return $value;
}

/**
 * @param mixed $value
 *
 * @return mixed
 */
function nullOrFileExists($value)
{
    Assert::nullOrFileExists($value);

    return $value;
}

function allFileExists(iterable $value): iterable
{
    Assert::allFileExists($value);

    return $value;
}
