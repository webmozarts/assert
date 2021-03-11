<?php

declare(strict_types=1);

namespace Webmozart\Assert\Tests;


use PHPUnit\Framework\TestCase;
use Webmozart\Assert\Assert;
use Webmozart\Assert\InvalidArgumentException;

class InvalidArgumentExceptionTest extends TestCase
{
    public function testAssertFileLine()
    {
        try {
            $line = __LINE__;
            Assert::notNull(null);
            $this->fail('Assertion not triggered');
        } catch (\Exception $e) {
            $this->assertEquals($line + 1, $e->getLine());
            $this->assertEquals(__FILE__, $e->getFile());
        }
    }

    public function testAssertStackTrace()
    {
        try {
            $line = __LINE__;
            Assert::notNull(null);
            $this->fail('Assertion not triggered');
        } catch (\Exception $e) {
            $this->assertStringStartsWith(
                sprintf(
                    '#0 %s(%d): Webmozart\Assert\Assert::notNull(NULL)',
                    __FILE__,
                    $line + 1
                ),
                $e->getTraceAsString()
            );
        }
    }

    public function testAssertTraceArray()
    {
        try {
            $line = __LINE__;
            Assert::notNull(null);
            $this->fail('Assertion not triggered');
        } catch (\Exception $e) {
            $trace = $e->getTrace();
            $this->assertEquals(
                array(
                    "file" => __FILE__,
                    "line" => $line + 1,
                    "function" => "notNull",
                    "class" => Assert::class,
                    "type" => "::",
                    "args" => array(null)
                ),
                $trace[0]
            );
        }
    }

    public function testThrowException()
    {
        try {
            throw new InvalidArgumentException();
        } catch (\Exception $e) {
            $trace = $e->getTrace();
            $this->assertEquals(__CLASS__, $trace[0]['class']);
        }
    }
}
