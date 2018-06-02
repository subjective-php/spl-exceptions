<?php

namespace ChadicusTest\Spl\Exceptions;

use Chadicus\Spl\Exceptions\InvalidCastException;
use PHPUnit\Framework\TestCase;
use RuntimeException;

/**
 * @coversDefaultClass \ChadicusTest\Spl\Exceptions\InvalidCastException
 */
final class InvalidCastExceptionTest extends TestCase
{
    /**
     * @test
     */
    public function basicUsage()
    {
        $previous = new \RuntimeException();
        $exception = new InvalidCastException('the message', 1, $previous);
        $this->assertSame('the message', $exception->getMessage());
        $this->assertSame(1, $exception->getCode());
        $this->assertSame($previous, $exception->getPrevious());
        $this->assertInstanceOf(RuntimeException::class, $exception);
    }
}
