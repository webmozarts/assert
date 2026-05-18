<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

function fileExists(mixed $value): mixed
{
    Assert::fileExists($value);

    return $value;
}

function nullOrFileExists(mixed $value): mixed
{
    Assert::nullOrFileExists($value);

    return $value;
}

function allFileExists(mixed $value): mixed
{
    Assert::allFileExists($value);

    return $value;
}

function allNullOrFileExists(mixed $value): mixed
{
    Assert::allNullOrFileExists($value);

    return $value;
}
