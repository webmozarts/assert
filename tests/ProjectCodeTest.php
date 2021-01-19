<?php

namespace Webmozart\Assert\Tests;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionMethod;
use Webmozart\Assert\Bin\MixinGenerator;

/**
 * @coversNothing
 */
class ProjectCodeTest extends TestCase
{
    private static $readmeContent;
    private static $assertDocComment;
    private static $mixinMethodNames;

    /**
     * @beforeClass
     */
    public static function doSetUpBeforeClass()
    {
        self::$readmeContent = file_get_contents(__DIR__.'/../README.md');

        $rc = new ReflectionClass('\Webmozart\Assert\Mixin');
        self::$assertDocComment = $rc->getDocComment();

        self::$mixinMethodNames = array();
        foreach ($rc->getMethods() as $method) {
            self::$mixinMethodNames[] = $method->name;
        }
    }

    /**
     * @dataProvider providesMethodNames
     *
     * @param string $method
     */
    public function testHasNullOr($method)
    {
        $fullMethodName = 'nullOr'.ucfirst($method);

        if ($method === 'notNull' || $method === 'null') {
            $this->addToAssertionCount(1);

            return;
        }
        $correct = strpos((string) self::$assertDocComment, '@method static void '.$fullMethodName);
        if (!$correct) {
            $correct = in_array($fullMethodName, self::$mixinMethodNames, true);
        }

        if ($correct === false) {
            $this->fail(sprintf(
                'All methods have a corresponding "nullOr" method, please add the "%s" method to the class level doc comment.',
                $fullMethodName
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
        $fullMethodName = 'all'.ucfirst($method);

        $correct = strpos((string) self::$assertDocComment, '@method static void '.$fullMethodName);
        if (!$correct) {
            $correct = in_array($fullMethodName, self::$mixinMethodNames, true);
        }

        if ($correct === false) {
            $this->fail(sprintf(
                'All methods have a corresponding "all" method, please add the "%s" method to the class level doc comment.',
                $fullMethodName
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
        $correct = strpos((string) self::$readmeContent, $method);

        if ($correct === false) {
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

        $this->assertStringContainsString(
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

        if ($doc === false || strpos($doc, '@psalm-assert') === false) {
            $this->addToAssertionCount(1);

            return;
        }

        $this->assertFileExists(
            __DIR__.'/static-analysis/assert-'.$method->getName().'.php'
        );
    }

    public function testMixinIsUpToDateVersion()
    {
        if (version_compare(PHP_VERSION, '7.2.0') < 0) {
            $this->markTestSkipped('mixin generator is implemented using php 7.2 features');

            return;
        }

        require_once __DIR__.'/../bin/src/MixinGenerator.php';

        $generator = new MixinGenerator();

        $actual = file_get_contents(__DIR__.'/../src/Mixin.php');

        $this->assertEquals($generator->generate(), $actual, 'please regenerate Mixin with `php bin/generate.php` command in the project root');
    }

    /**
     * @return array
     */
    public function providesMethodNames()
    {
        return array_map(function ($value) {
            return array($value->getName());
        }, $this->getMethods());
    }

    /**
     * @return array
     */
    public function provideMethods()
    {
        return array_map(function ($value) {
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
            if ($rcMethod->getFileName() !== $rc->getFileName()) {
                continue;
            }

            $methodName = $rcMethod->getName();
            if (strpos($methodName, '__') === 0) {
                continue;
            }
            $methods[] = $rcMethod;
        }

        return $methods;
    }
}
