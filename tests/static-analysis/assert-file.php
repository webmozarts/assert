<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

function file(mixed $value): mixed
{
    return Assert::file($value);
}

function nullOrFile(mixed $value): mixed
{
    return Assert::nullOrFile($value);
}

function allFile(mixed $value): mixed
{
    return Assert::allFile($value);
}

function allNullOrFile(mixed $value): mixed
{
    return Assert::allNullOrFile($value);
}
