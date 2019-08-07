<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;


/**

 * @return null
 */
function consume(?object $value)
{
    Assert::isEmpty($value);

    return $value;
}
