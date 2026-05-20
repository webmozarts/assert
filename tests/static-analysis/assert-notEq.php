<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

function notEq(mixed $value, mixed $expect): mixed
{
    return Assert::notEq($value, $expect);
}

function nullOrNotEq(mixed $value, mixed $expect): mixed
{
    return Assert::nullOrNotEq($value, $expect);
}

function allNotEq(mixed $value, mixed $expect): mixed
{
    return Assert::allNotEq($value, $expect);
}

function allNullOrNotEq(mixed $value, mixed $expect): mixed
{
    return Assert::allNullOrNotEq($value, $expect);
}
