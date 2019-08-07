<?php

namespace Webmozart\Assert\StaticAnalysis\AssertString;

use Webmozart\Assert\Assert;


/**

 * @return null
 */
function consume(?object $value)
{
    Assert::isEmpty($value);

    return $value;
}
