<?php

namespace Webmozart\Assert\Tests;

use ReflectionClass;
use ReflectionMethod;

/**
 * @coversNothing
 */
class ProjectCodeTest extends BaseTestCase
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
        $correct = strpos( (string)self::$assertDocComment,'@method static void nullOr' . ucfirst($method));
        if ($correct === false) {
            $this->fail(sprintf(
                'All methods have a corresponding "nullOr" method, please add the "nullOr%s" method to the class level doc comment.',
                ucfirst($method)
            ));
        }

       $this->addToAssertionCount(1);
    }

    /**
     * @dataProvider providesMethodNames
     *
     * @param string $method
     */
    public function testHasAll($method)
    {
        $correct = strpos((string) self::$assertDocComment,'@method static void all' . ucfirst($method));

        if ($correct === false) {
            $this->fail(sprintf(
                'All methods have a corresponding "all" method, please add the "all%s" method to the class level doc comment.',
                ucfirst($method)
            ));
        }

        $this->addToAssertionCount(1);
    }

    /**
     * @dataProvider providesMethodNames
     *
     * @param string $method
     */
    public function testIsInReadme($method)
    {
        $correct = strpos((string) self::$readmeContent,$method);

        if($correct === false) {
            $this->fail(sprintf(
                'All methods must be documented in the README.md, please add the "%s" method.',
                $method
            ));
        }
        $this->addToAssertionCount(1);
    }

    /**
     * @dataProvider provideMethods
     *
     * @param ReflectionMethod $method
     */
    public function testHasThrowsAnnotation($method)
    {
        $doc = $method->getDocComment();

        $this->assertNotFalse(
            $doc,
            sprintf(
                'Expected a doc comment on the "%s" method, but none found',
                $method->getName()
            )
        );

        $this->assertContains(
            '@throws InvalidArgumentException',
            $doc,
            sprintf(
                'Expected method "%s" to have an @throws InvalidArgumentException annotation, but none found',
                $method->getName()
            )
        );

    }

    /**
     * @dataProvider provideMethods
     *
     * @param ReflectionMethod $method
     */
    public function testHasCorrespondingStaticAnalysisFile($method)
    {
        $doc = $method->getDocComment();
        if($doc === false || strpos($doc, '@psalm-assert') === false) {
            $this->addToAssertionCount(1);
            return;
        }

        $this->assertFileExists(
            __DIR__ . '/static-analysis/assert-'. $method->getName() . '.php'
        );
    }

    /**
     * @return array
     */
    public function providesMethodNames()
    {
        return array_map(function($value) {
            return array($value->getName());
        }, $this->getMethods());
    }

    /**
     * @return array
     */
    public function provideMethods()
    {
        return array_map(function($value) {
            return array($value);
        }, $this->getMethods());
    }

    /**
     * @return array
     */
    private function getMethods()
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
            $methods[] = $rcMethod;
        }

        return $methods;
    }
}
