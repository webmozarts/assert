<?php

/*
 * This file is part of the webmozart/assert package.
 *
 * (c) Bernhard Schussek <bschussek@gmail.com>
 * (c) Thomas Nunninger <thomas.nunninger@saleupventures.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Webmozart\Assert\Tests {

    use PHPUnit\Framework\TestCase;
    use Webmozart\Assert\MyProjectNamespace\Assert;

    class CustomExceptionClassTest extends TestCase
    {
        public function testCustomException()
        {
            // given a project-specific, custom extension of the Assert class as included via the use statement

            // when an assertion fails
            // then a custom exception is thrown
            $this->setExpectedException(
                'Webmozart\Assert\MyProjectNamespace\ProjectSpecificException',
                'Custom exception message. Expected: "this is". Given: "not the same".'
            );

            Assert::same('this is', 'not the same', 'Custom exception message. Expected: %1$s. Given: %2$s.');
        }
    }

}

namespace Webmozart\Assert\MyProjectNamespace {

    use Webmozart\Assert\Assert as BaseAssert;

    class Assert extends BaseAssert
    {
        protected static $exceptionClass = 'Webmozart\Assert\MyProjectNamespace\ProjectSpecificException';
    }

    class ProjectSpecificException extends \InvalidArgumentException
    {
    }
}
