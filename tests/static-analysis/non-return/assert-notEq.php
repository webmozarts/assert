<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis\NonReturn;

use Webmozart\Assert\Assert;

function notEq(mixed $value, mixed $expect): mixed
{
    Assert::notEq($value, $expect);

    return $value;
}

function nullOrNotEq(mixed $value, mixed $expect): mixed
{
    Assert::nullOrNotEq($value, $expect);

    return $value;
}

function allNotEq(mixed $value, mixed $expect): mixed
{
    Assert::allNotEq($value, $expect);

    return $value;
}

function allNullOrNotEq(mixed $value, mixed $expect): mixed
{
    Assert::allNullOrNotEq($value, $expect);

    return $value;
}
