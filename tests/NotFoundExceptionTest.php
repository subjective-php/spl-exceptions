<?php

namespace ChadicusTest\Spl\Exceptions;

use Chadicus\Spl\Exceptions\NotFoundException;
use PHPUnit\Framework\TestCase;
use RuntimeException;

/**
 * @coversDefaultClass \ChadicusTest\Spl\Exceptions\NotFoundException
 */
final class NotFoundExceptionTest extends TestCase
{
    /**
     * @test
     */
    public function basicUsage()
    {
        $previous = new \RuntimeException();
        $exception = new NotFoundException('the message', 1, $previous);
        $this->assertSame('the message', $exception->getMessage());
        $this->assertSame(1, $exception->getCode());
        $this->assertSame($previous, $exception->getPrevious());
        $this->assertInstanceOf(RuntimeException::class, $exception);
    }
}
