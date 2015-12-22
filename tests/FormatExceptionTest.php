<?php
namespace ChadicusTest\Spl\Exceptions;

use Chadicus\Spl\Exceptions\FormatException;

/**
 * Unit tests for the \Chadicus\Spl\Exceptions\FormatException class.
 *
 * @coversDefaultClass \Chadicus\Spl\Exceptions\FormatException
 */
final class FormatExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Verify basic usage of FormatException.
     *
     * @test
     *
     * @return void
     */
    public function construct()
    {
        $exception = new FormatException('this is a test', 1);
        $this->assertInstanceOf('\InvalidArgumentException', $exception);
        $this->assertSame('this is a test', $exception->getMessage());
        $this->assertSame(1, $exception->getCode());
    }
}
