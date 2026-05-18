<?php

declare(strict_types=1);

/**
 * this file is used by maintainers of the library to re-generate the type definitions
 * of webmozart/assert: you probably don't need to use it.
 */

use Webmozart\Assert\Bin\MixinGenerator;
use Webmozart\Assert\Bin\StaticAnalysisNonReturnGenerator;

require_once __DIR__.'/../vendor/autoload.php';

$generator = new MixinGenerator();
file_put_contents(__DIR__.'/../src/Mixin.php', $generator->generate());

file_put_contents(__DIR__.'/../src/HasAssert.php', $generator->generateHasAssert());

(new StaticAnalysisNonReturnGenerator(__DIR__.'/../tests/static-analysis'))->generate();

echo "Done.";
