<?php

namespace Webmozart\Assert\Tests;

use PHPUnit\Framework\TestCase;

/**
 * This class allows us to be compatible with multiple PHPUnit versions.
 */
class BaseTestCase extends TestCase
{
    /**
     * The setExpectedException got removed in later phpunit versions,
     * and instead it got split up into three functions.
     *
     * So if the newer functions exist we call those where needed, and otherwise
     * we just use the original function.
     *
     * @param string $exceptionName
     * @param string $exceptionMessage
     * @param int $exceptionCode
     */
    public function setExpectedException($exceptionName, $exceptionMessage = '', $exceptionCode = null) {
        if (method_exists($this, 'expectException')) {
            $this->expectException($exceptionName);
            if($exceptionMessage) {
                $this->expectExceptionMessage($exceptionMessage);
            }
            if( $exceptionCode) {
                $this->expectExceptionCode($exceptionCode);
            }
            return;
        }
        parent::setExpectedException($exceptionName, $exceptionMessage, $exceptionCode);
    }
}
