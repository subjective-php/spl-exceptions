<?php

namespace ChadicusTest\Spl\Exceptions;

use Chadicus\Spl\Exceptions\NullValueException;
use PHPUnit\Framework\TestCase;
use UnexpectedValueException;

/**
 * @coversDefaultClass \ChadicusTest\Spl\Exceptions\NullValueException
 */
final class NullValueExceptionTest extends TestCase
{
    /**
     * @test
     */
    public function basicUsage()
    {
        $previous = new \RuntimeException();
        $exception = new NullValueException('the message', 1, $previous);
        $this->assertSame('the message', $exception->getMessage());
        $this->assertSame(1, $exception->getCode());
        $this->assertSame($previous, $exception->getPrevious());
        $this->assertInstanceOf(UnexpectedValueException::class, $exception);
    }
}
