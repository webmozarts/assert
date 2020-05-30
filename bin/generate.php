<?php

declare(strict_types=1);

/**
 * this file is used by maintainers of the library to re-generate the type definitions
 * of webmozart/assert: you probably don't need to use it.
 */

use Webmozart\Assert\Bin\MixinGenerator;

require_once __DIR__.'/../vendor/autoload.php';

file_put_contents(__DIR__.'/../src/Mixin.php', (new MixinGenerator())->generate());
