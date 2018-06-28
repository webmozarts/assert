<?php

namespace Webmozart\Assert\Tests;

use PHPUnit_Framework_TestCase;
use ReflectionClass;
use ReflectionMethod;

/**
 * @coversNothing
 */
class ProjectCodeTest extends PHPUnit_Framework_TestCase
{
    private static $readmeContent;
    private static $assertDocComment;

    public static function setUpBeforeClass()
    {
        self::$readmeContent = file_get_contents(__DIR__ . '/../README.md');

        $rc = new ReflectionClass('\Webmozart\Assert\Assert');
        self::$assertDocComment = $rc->getDocComment();
    }

    /**
     * @dataProvider providesMethodNames
     *
     * @param string $method
     */
    public function testHasNullOr($method)
    {
        if ($method === 'notNull' || $method === 'null') {
            $this->addToAssertionCount(1);
            return;
        }

        $this->assertContains(
            '@method static void nullOr' . ucfirst($method),
            self::$assertDocComment,
            sprintf(
                'All methods have a corresponding "nullOr" method, please add the "nullOr%s" method to the class level doc comment.',
                ucfirst($method)
            )
        );
    }

    /**
     * @dataProvider providesMethodNames
     *
     * @param string $method
     */
    public function testHasAll($method)
    {
        $this->assertContains(
            '@method static void all' . ucfirst($method),
            self::$assertDocComment,
            sprintf(
                'All methods have a corresponding "all" method, please add the "all%s" method to the class level doc comment.',
                ucfirst($method)
            )
        );
    }

    /**
     * @dataProvider providesMethodNames
     *
     * @param string $method
     */
    public function testIsInReadme($method)
    {
        $this->assertContains(
            $method,
            self::$readmeContent,
            sprintf(
                'All methods must be documented in the README.md, please add the "%s" method.',
                ucfirst($method)
            )
        );
    }

    /**
     * @return array
     */
    public function providesMethodNames()
    {
        return array_map(function($value) {
            return array($value);
        }, $this->getMethodNames());
    }

    /**
     * @return array
     */
    private function getMethodNames()
    {
        static $methods;

        if ($methods !== null) {
            return $methods;
        }

        $rc = new ReflectionClass('\Webmozart\Assert\Assert');
        $methods = array();

        $rcMethods = $rc->getMethods(ReflectionMethod::IS_PUBLIC);

        foreach ($rcMethods as $rcMethod) {
            $methodName = $rcMethod->getName();
            if (strpos($methodName, '__') === 0) {
                continue;
            }
            $methods[] = $methodName;
        }

        return $methods;

    }

}
